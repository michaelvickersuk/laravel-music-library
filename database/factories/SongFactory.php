<?php

use Faker\Generator as Faker;

$factory->define(\App\Entities\Song::class, function (Faker $faker) {
    return [
        'name' => $faker->text(30),
        'duration' => $faker->numberBetween(30, 240),
    ];
});
