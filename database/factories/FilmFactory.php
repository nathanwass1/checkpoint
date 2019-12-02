<?php

use Faker\Generator as Faker;

$factory->define(App\Film::class, function (Faker $faker) {
    return [
        'owner_id' => $faker->randomDigit,
        'Title' => $faker->name,
        'Genre' => $faker->name,
        'Synopsis' => $faker->sentence,
    ];
});
