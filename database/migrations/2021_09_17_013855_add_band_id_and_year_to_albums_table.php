<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBandIdAndYearToAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->foreignId('band_id')->after('name');
            $table->string('year')->after('band_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->dropColumn('band_id');
            $table->dropColumn('year');
        });
    }
}
