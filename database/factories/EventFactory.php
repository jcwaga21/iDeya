<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'type' => 'FireSide',
        'date' => $faker->date,
        'expected_no' => random_int(10, 50),
        'actual_no' => random_int(10, 50),
        'guestspeaker' => $faker->name,
        'eventbudget' => random_int(1000, 5000),
        'status' => 'pending',
        'reg_fee' => random_int(100, 500),
        'no_days' => random_int(1, 10),
        
    ];
});