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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('artist_id');
            // $table->bigInteger('albums_id')->nullable();
            $table->string('title', 30);
            $table->date('exit_date');
            $table->integer('playback_counter');
            $table->integer('duration')->unsigned();
            $table->integer('sales');
            $table->text('text_song')->nullable();
            $table->tinyInteger('rating')->default(0);
            $table->boolean('explicit')->default(false);
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
        Schema::dropIfExists('songs');
    }
}
