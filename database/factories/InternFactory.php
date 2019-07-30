<?php

namespace Modules\Office\Http\Controllers;

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Modules\Office\Entities\Intern;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Intern::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'first_name' => 'John',
        'last_name' => 'Moris',
        'contact_number' => '093587111471',
        'remember_token' => Str::random(10),
    ];
});
