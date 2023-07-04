<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertandinganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertandingan', function (Blueprint $table) {
            $table->increments('id_pertandingan');
            $table->integer('no_meja');
            $table->integer('catur_hitam');
            $table->integer('skor_ch');
            $table->integer('catur_putih');
            $table->integer('skor_cp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertandingan');
    }
}
