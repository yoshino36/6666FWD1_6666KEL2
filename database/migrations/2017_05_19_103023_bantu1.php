<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bantu1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantu1', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kesenian2',false,true);
            $table->foreign('id_kesenian2')->references('id')->on('kesenian1')->onDelete('cascade');
            $table->integer('id_kebudayaan2',false,true);
            $table->foreign('id_kebudayaan2')->references('id')->on('kebudayaan1')->onDelete('cascade');
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
        Schema::drop('bantu1');
    }
}
