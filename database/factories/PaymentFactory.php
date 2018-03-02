<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Payment::class, function (Faker $faker) {
    return [
        'payment_date' => $faker -> dateTime,
        'payment_amout' => $faker -> randomNumber(),
        'coin_id' => $faker -> randomNumber(),
        'user_id' => $faker -> randomNumber(),
    ];
});
