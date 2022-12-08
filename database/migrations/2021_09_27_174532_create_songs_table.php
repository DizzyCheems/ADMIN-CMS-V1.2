<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('artist_id');
            $table->string('songname');
            $table->string('genre');
            $table->string('author');
            $table->string('date_registered');
            $table->string('background_image');
            $table->string('image');
            $table->string('audio');
            $table->timestamps();       
            $table->string('info');
            $table->string('info2');
            $table->string('info3');
            $table->string('audio');     
            $table->foreign('artist_id')
            ->references('id')
            ->on('artist')
            ->onDelete('cascade');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
