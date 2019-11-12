<?php

use Faker\Generator as Faker;

$factory->define(App\Preference::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word
    ];
});
