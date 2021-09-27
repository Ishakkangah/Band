<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Ishakk angah',
            'email' => 'Ishak@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
