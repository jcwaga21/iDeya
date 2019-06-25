<?php

use Faker\Generator as Faker;

$factory->define(App\EventBudget::class, function (Faker $faker) {
    return [
        'event_id' => random_int(1, 10),
        'budget_id' => random_int(1, 10),
    ];
});
