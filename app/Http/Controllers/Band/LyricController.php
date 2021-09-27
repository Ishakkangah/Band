<?php

namespace App\Http\Controllers\Band;

use App\Http\Controllers\Controller;
use App\Models\Band;
use Illuminate\Http\Request;

class LyricController extends Controller
{
    public function create()
    {
        return view('Lyric.create', [
            'bands' => Band::latest()->get(),
        ]);
    }
}
