<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\options;
use Faker\Generator as Faker;

$factory->define(options::class, function (Faker $faker) {
    return [
        'name' =>$faker->name
    ];
});
