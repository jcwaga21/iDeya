<?php

use Faker\Generator as Faker;

$factory->define(App\Budget::class, function (Faker $faker) {
    return [
        'item' => $faker->word,
        'no_of_items' => random_int(1, 10),
        'amount' => random_int(1, 1000),
    ];
});
