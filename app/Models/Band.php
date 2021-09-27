<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getTakeImageAttribute()
    {
        return '/Storage/' . $this->thumbnail;
    }

    // SETIAP BAND PUNYA BANYAK ALBUM DAN SETIAP ALBUM PASTI PUNYA BAND
    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    // SETIAP BAND MEMILIKI BANYAK GENRE & SETIAP GENRE MEMILI BANYAK BAND
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

}
