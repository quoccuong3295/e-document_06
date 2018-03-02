<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'author' => $faker -> name,
        'description' => $faker -> randomLetter,
        'category_id' => $faker -> randomNumber(),
    ];
});
