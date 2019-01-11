<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_user', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('song_id');
            $table->unsignedInteger('user_id');
            $table->boolean('loved')->default(false);
            $table->timestamps();
            $table->foreign('song_id')->references('id')->on('songs');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_user');
    }
}
