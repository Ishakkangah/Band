<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // SETIAP ALBUM PASTI PUNYA BAND & SETIAP BAND MEMPUNYAI BANYAK ALBUN
    public function band()
    {
        return $this->belongsTo(Band::class);
    }

    // SETIAP BAND MEMILIKI BANYAK LYRIC
    public function lyrics()
    {
        return $this->hasMany(Lyric::class);
    }
}
