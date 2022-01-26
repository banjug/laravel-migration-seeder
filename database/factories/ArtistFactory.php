<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'birthday' => $faker -> date(),
        'nationality' => $faker -> word(),
        'debut_year' => $faker -> year(),
        'label' => $faker -> word(),
    ];
});
