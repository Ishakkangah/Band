<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLyricsTable extends Migration
{
    public function up()
    {
        // Catatan direlasi ini setiap lyrick memiliki satu album dan setiao album memiliki banyak lirik 
        Schema::create('lyrics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('album_id');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lyrics');
    }
}
