<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;


$factory->define(\App\Dog::class, function (Faker $faker){
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween(1,20),
        'color' => $faker->colorName,
        'about' => $faker->realText(500),
    ];
});
