<?php

use Illuminate\Database\Seeder;

class BillPaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\BillPay::class, function(Faker\Generator $faker) {
            return [
                'name' => $faker->name,
                'date_due' => $faker->date(),
                'value' => $faker->randomFloat(2, 100, 1000),
                'done' => (bool) rand(0,1),
                'category_id' => rand(1, 50)
            ];
        });
    }
}
