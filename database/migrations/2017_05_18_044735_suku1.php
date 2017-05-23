<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Suku1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('suku1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_suku');
            $table->string('file_gambar');
            $table->integer('id_provinsi',false,true);
            $table->foreign('id_provinsi')->references('id')->
            on('provinsi1')->onDelete('cascade');
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
        Schema::drop('suku1');
    }
}
