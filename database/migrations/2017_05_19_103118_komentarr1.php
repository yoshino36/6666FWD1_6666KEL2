<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Komentarr1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentarr1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('komentar1');
            $table->integer('id_member1',false,true);
            $table->foreign('id_member1')->references('id')->on('member1')->onDelete('cascade');
            $table->integer('id_kesenian_kebudayaan1',false,true);
            $table->foreign('id_kesenian_kebudayaan1')->references('id')->on('bantu1')->onDelete('cascade');
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
        Schema::drop('komentarr1');
    }
}
