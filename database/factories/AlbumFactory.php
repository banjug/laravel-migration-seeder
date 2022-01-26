<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title_album' => $faker -> word(),
        'release_date' => $faker -> date(),
        'year_recorded' => $faker -> year(),
        'tracks' => $faker -> numberBetween(1, 30),
        'artist' => $faker -> name(),
        'producer' => $faker -> name(),
        'description' => $faker -> text(300),
        'genre' => $faker -> word(),
    ];
});
