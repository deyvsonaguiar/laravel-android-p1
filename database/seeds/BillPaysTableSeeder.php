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
        factory(App\Models\BillPay::class, 20)->create();
    }
}
