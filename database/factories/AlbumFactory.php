<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name' => $faker -> words(2, true),
        'exit_date' => $faker -> year(),
        'genre' => $faker -> word(),
        'album_type' => $faker -> word(),
        'sales' => $faker -> randomNumber(5, false),
        'views' => $faker -> randomNumber(5, false),
        'record_company' => $faker -> company(),
    ];
});
