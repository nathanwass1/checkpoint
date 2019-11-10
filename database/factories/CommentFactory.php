<?php

use Faker\Generator as Faker;

$factory->define(App\Comments::class, function (Faker $faker) {
    return [
        'user_id' => function (){
            return factory(App\User::class)->create()->id;
        },
    
    'title' => $faker->sentence,
    'body' => $faker->sentence
    ];
});
