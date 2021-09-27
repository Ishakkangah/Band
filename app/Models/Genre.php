<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = [];

    // SETIAP GENRE MEMPUNYAI BANYAK BAND DAN SETIAP BAND MEMPUNYAI BANYAK GENRE
    public function bands()
    {
        return $this->belongsToMany(Band::class);
    }
}
