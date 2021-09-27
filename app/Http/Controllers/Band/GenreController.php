<?php

namespace App\Http\Controllers\Band;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\RequestGenre;
use App\Models\Genre;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GenreController extends Controller
{
    public function create()
    {
        return view('Genre.create', [
            'genre' => new Genre,
        ]);
    }
    
    
    
    public function store(RequestGenre $request)
    {

        Genre::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        Alert::success('Successfully', 'Genre was success inserted');
        return back();
    }



    public function table()
    {
        return view('Genre.table',[
            'genres' => Genre::latest()->simplePaginate(10),
        ]);
    }

    
    public function edit(Genre $genre)
    {
        return view('Genre.edit',[
            'genre' => $genre,
        ]);
    }

    

    public function update(RequestGenre $request, Genre $genre)
    {
        $genre->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        Alert::success('Successfully', 'Genre was success updateted');
        return redirect('genre/table');
    }

    
    
    public function destroy(Genre $genre)
    {
        $genre->delete();
        Alert::success('Successfully', 'deleted genre successfully');
        return redirect('genre/table');
    }


}
