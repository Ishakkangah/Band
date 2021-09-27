<?php

namespace App\Http\Controllers\Band;

use App\Http\Controllers\Controller;
use App\Http\Requests\Album\RequestAlbum;
use App\Models\{Album,Band};
use GuzzleHttp\Psr7\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    public function create()
    {
        return view('Album.create',[
            'submitLabel' => 'Create new album',
            'bands' => Band::get(),
            'album' => new Album,
        ]);
    }
    
    
    public function store(RequestAlbum $request)
    {
        Album::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'band_id' => $request->band,
            'year' => $request->year,
        ]);

        FacadesAlert ::success('Successfully', 'Created new album successfuly');
        return redirect('/album/table');
    }
    
    
    public function table()
    {
        return view('Album.table',[
            'albums' => Album::latest()->paginate(10),
        ]);
    }


    public function edit(Album $album)
    {
        return view('Album.edit', [
            'album' => $album,
            'bands' => Band::get(),
            'submitLabel' => 'Change album',

        ]);
    }

    public function update(RequestAlbum $request, Album $album)
    {
        $album->update([
            'band_id' => $request->band,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'year' => $request->year,
        ]);
        FacadesAlert::success('Succesfully', 'updated was successfully');
        return redirect('/album/table');
    }

    public function destroy(Album $album)
    {
        alert()->success('Successfuly','deleted was successfully.');
        $album->delete();
        // FacadesAlert::success('successfully', 'deleted was successfully');
        return back();        
    }


    public function search()
    {
        $data = request()->search;
        
        $albums = Album::where('name', "LIKE", "%$data%")
        ->orWhere('year', "LIKE", "%$data%")
        ->paginate(10);

        return view('Album.table', [
            'albums' => $albums,
        ]);
    }
}
