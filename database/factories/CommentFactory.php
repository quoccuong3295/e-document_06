<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'document_id' => $faker -> randomNumber(),
        'content' => $faker -> randomLetter,
        'user_id' => $faker ->randomNumber(),
    ];
});
