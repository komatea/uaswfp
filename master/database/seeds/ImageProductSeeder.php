<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_products')->insert([
            'id' => 1,
            'filename' => "rogflowx13_1.jpg",
            'product_id' => 1,
        ]);
        DB::table('image_products')->insert([
            'id' => 2,
            'filename' => "rogflowx13_2.jpg",
            'product_id' => 1,
        ]);
        DB::table('image_products')->insert([
            'id' => 3,
            'filename' => "tuffx505_1.jpg",
            'product_id' => 2,
        ]);
        DB::table('image_products')->insert([
            'id' => 4,
            'filename' => "tuffx505_2.jpg",
            'product_id' => 2,
        ]);
    }
}
{{  }}