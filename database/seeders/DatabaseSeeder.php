<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(genreSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
