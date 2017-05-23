<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kebudayaan1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebudayaan1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kebudayaan');
            $table->string('file_gambar');
            $table->text('keterangan');
            $table->integer('id_suku',false,true);
            $table->foreign('id_suku')->references('id')->on('suku1')->onDelete('cascade');
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
        Schema::drop('kebudayaan1');
    }
}
