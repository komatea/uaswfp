<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'id' => 1,
            'name' => "ASUS",
            'slug' => "asus",
            'logo_image' => "asus.png",
        ]);
        DB::table('brands')->insert([
            'id' => 2,
            'name' => "DELL",
            'slug' => "dell",
            'logo_image' => "dell.jpg",
        ]);
        DB::table('brands')->insert([
            'id' => 3,
            'name' => "Lenovo",
            'slug' => "lenovo",
            'logo_image' => "lenovo.png",
        ]);
    }
}
