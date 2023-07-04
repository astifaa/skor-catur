<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertandinganPesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertandingan_peserta', function (Blueprint $table) {
            $table->increments('id_pertandingan_peserta');
            $table->integer('id_peserta');
            $table->string('babak_1');
            $table->string('babak_2');
            $table->string('babak_3');
            $table->string('babak_4');
            $table->string('babak_5');
            $table->string('babak_6');
            $table->string('babak_7');
            $table->string('babak_8');
            $table->string('babak_9');
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
        Schema::dropIfExists('pertandingan_peserta');
    }
}
