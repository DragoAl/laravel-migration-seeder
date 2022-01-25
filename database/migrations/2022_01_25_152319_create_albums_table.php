<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('artist_id');
            $table->string('name',50);
            $table->date('exit_date');
            $table->string('genre');
            $table->string('album_type');
            $table->integer('sales')->nullable();
            $table->tinyInteger('number_of_songs');
            $table->string('record_company');
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
        Schema::dropIfExists('albums');
    }
}
