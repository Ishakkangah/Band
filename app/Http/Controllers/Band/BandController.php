<?php

namespace App\Http\Controllers\Band;

use App\Http\Controllers\Controller;
use App\Http\Requests\Band\RequestBand;
use App\Models\{Band , Genre};
Use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class BandController extends Controller
{
    public function table()
    {
        return view('Band.table', [
            'Bands' => Band::latest()->paginate(10),
        ]);
    }


    public function create()
    {
        return view('Band.create', [
            'genres' => Genre::get(),
            'submitLabel' => 'Create new band',
            'band' => new Band(),
        ]);
    }
    

    public function store(RequestBand $request)
    {
        $img = \DefaultProfileImage::create("thumbnail");
        \Storage::put("profile.png", $img->encode());
        

        $Band = Band::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'thumbnail' => $request->file('thumbnail') ? $request->file('thumbnail')->store('Band/images') : 'profile.png',
        ]);
        $Band->genres()->sync($request->genres);
        FacadesAlert::success('success', 'input data was success');
        return redirect('/band/table');
    }


    public function edit(Band $band)
    { 
        return view('Band.edit', [
            'band' => $band,
            'genres' => Genre::get(),
            'submitLabel' => 'Update data',
        ]);
    }


    public function update(RequestBand $request, Band $band)
    {
        if($request->file('thumbnail'))
        {
            Storage::delete($band->thumbnail);
            $file_name = $request->file('thumbnail')->getClientOriginalName();
            $thumbnail = $request->file('thumbnail')->storeAs('Band/images', $file_name);
        } else {
            $thumbnail = $band->thumbnail;
        }

        $band->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'thumbnail' => $thumbnail,
        ]);

        $band->genres()->sync($request->genres);
        FacadesAlert::success('Success', 'Update was success');
        return redirect('/band/table');
    }


    public function destroy(Band $band)
    {   
        Storage::delete($band->thumbnail);
        $band->delete();
        $band->albums()->delete();
        $band->genres()->detach();

        FacadesAlert::success('Success', 'Delete band success');
        return redirect('/band/table');
    }


    public function detail(Band $band)
    {
        return view('Band.detail',[
            'band' => $band,
        ]);
    }

}



