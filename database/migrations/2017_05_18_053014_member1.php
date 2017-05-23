<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Member1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('member1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama');
            $table->string('email');
            $table->string('No_hp');
            $table->integer('id_user1',false,true);
            $table->foreign('id_user1')->references('id')->on('user1')->onDelete('cascade');
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
        Schema::drop('member1');
    }
}
