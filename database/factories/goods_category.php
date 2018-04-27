<?php

use Faker\Generator as Faker;

$factory->define(App\goods_category::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
