<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Modules\Office\Entities\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'contact_number' => $faker->phoneNumber,
        'position' => $faker->jobTitle,
    ];
});
