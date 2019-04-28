<?php

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return array(
        'name' => $faker->city,
        'user_id' => rand(1, 21)
    );
});