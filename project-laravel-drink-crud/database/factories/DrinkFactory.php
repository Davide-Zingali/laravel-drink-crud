<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name' => ($faker -> word()),
        'gradation' => ($faker -> numberBetween($min = 5, $max = 90)),
        'price' => ($faker -> randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 60)),
    ];
});
