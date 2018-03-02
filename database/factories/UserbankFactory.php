<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User_bank::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'user_id' => $faker -> randomNumber(),
        'card_number' => $faker ->randomNumber(),
    ];
});
