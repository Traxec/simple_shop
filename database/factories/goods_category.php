<?php

use Faker\Generator as Faker;

$factory->define(App\Goods_category::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
