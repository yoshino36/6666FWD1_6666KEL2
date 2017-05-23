<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kesenian1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesenian1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kesenian');
            $table->string('file_gambar');
            $table->text('keterangan');
            $table->integer('id_suku1',false,true);
            $table->foreign('id_suku1')->references('id')->on('suku1')->onDelete('cascade');
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
        Schema::drop('kesenian1');
    }
}
