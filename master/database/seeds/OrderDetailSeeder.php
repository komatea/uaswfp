<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderdetails')->insert([
            'id' => 1,
            'qty' => 1,
            'subtotal' => 10000000,
            'product_id' => 8,
            'order_id' => 1,
        ]);
        DB::table('orderdetails')->insert([
            'id' => 2,
            'qty' => 1,
            'subtotal' => 6000000,
            'product_id' => 9,
            'order_id' => 1,
        ]);
    }
}
