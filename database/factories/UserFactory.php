<?php

use Faker\Generator as Faker;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123123'), // secret
        'phone' => $faker->randomNumber(),
        'coins' => $faker->numberBetween($min = 0, $max = 1000),
        'sex' => $faker->boolean,
        'address' => $faker->address,
        'bank_id' => $faker->randomNumber(),
        'free_download' => $faker->numberBetween($min = 0, $max = 3),
        'role' => $faker->numberBetween($min = 1, $max = 2),
        'remember_token' => str_random(10),
    ];
});
