<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class genreSeeder extends Seeder
{
    public function run()
    {
        $genres = collect([
            'Speed Metal',
            'Heavy Metal',
            'Thrash Metal',
            'Power Metal',
            'Death Metal',
            'Black Metall',
            'Pagan Metal',
            'Viking Metal',
            'Folk Metal',
            'Symphonic Metal',
            'Gothic Metal',
            'Glam Metal',
            'Hair Metal',
            'Doom Metal',
            'Groove Metal',
            'Industrial Metal',
            'Modern Metal',
            'Neoclassical Metal',
            'New Wave Of British Heavy Metal',
            'Post Metal',
            'Progressive Metal',
        ]);

        $genres->each( function($genre){
            Genre::create([
                'name' => $genre,
                'slug' => Str::slug($genre),
            ]);
        });
    }
}
