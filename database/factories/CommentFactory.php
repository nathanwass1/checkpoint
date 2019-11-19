<?php

use Faker\Generator as Faker;

$factory->define(App\Comments::class, function (Faker $faker) {
    return [
        'post_id' => function (){
            return factory(App\Post::class)->create()->id;
        },
    
    'title' => $faker->sentence,
    'body' => $faker->sentence
    ];
});
