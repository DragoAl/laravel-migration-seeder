<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> word(),
        'exit_date' => $faker -> dateTime(),
        'playback_counter' => $faker -> randomNumber(6, false),
        'duration' => $faker -> numberBetween(30, 600),
        'sales' => $faker -> randomNumber(2, false),
        'text_song' => $faker -> text(300),
        'rating' => $faker -> numberBetween(0, 10),
        'explicit' => $faker -> boolean()
    ];
});
