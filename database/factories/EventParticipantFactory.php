<?php

use Faker\Generator as Faker;

$factory->define(App\EventParticipant::class, function (Faker $faker) {
    return [
    	'event_id' => random_int(1, 10),
        'participant_id' => random_int(1, 10),
    ];
});
