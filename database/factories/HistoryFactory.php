<?php

use Faker\Generator as Faker;

$factory->define(App\Models\History::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'upload_date' => $faker -> dateTime(),
        'dowload_date' => $faker -> dateTime(),
        'document_id' => $faker -> randomNumber(),
        'user_id' => $faker -> randomNumber(),
    ];
});
