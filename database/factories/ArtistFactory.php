<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName(),
        'surname' => $faker -> lastName(),
        'start_activity' => $faker -> year(),
        'origin_country' => $faker -> countryCode(),
        'music_genre' => $faker -> word(),
        'label' => $faker -> word()
    ];
});
