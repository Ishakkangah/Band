<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    use HasFactory;

    // SETIAP LYRIK MEMILIKI SATU ALBUM
    public function album()
    {
        return $this->belongsTo(Album::class);
    }

}
