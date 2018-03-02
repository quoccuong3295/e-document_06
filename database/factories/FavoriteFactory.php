<?php

use Faker\Generator as Faker;

$factory->define(App\Favorite::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'document_id' => $faker -> randomNumber(),
        'user_id' => $faker ->randomNumber(),
    ];
});
