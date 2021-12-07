<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id' => 1,
            'orderdate' => "2021-10-07",
            'grand_total' => 16000000,
            'employee_id' => 2,
            'status' => 'waiting',
        ]);
    }
}
