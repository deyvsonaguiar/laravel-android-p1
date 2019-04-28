<?php

use Faker\Generator as Faker;

    $factory->define(App\Models\BillPay::class, function (Faker $faker) {
        return [
            'name' => $faker->name,
            'date_due' => $faker->date(),
            'value' => $faker->randomFloat(2, 100, 1000),
            'done' => (bool) rand(0,1),
            'user_id' => rand(1, 21),
            'category_id' => rand(1, 50)

    ];
});
