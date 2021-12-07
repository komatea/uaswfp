<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => "Gaming",
            'slug' => "gaming",
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'name' => "Business",
            'slug' => "business",
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'name' => "Video Editing",
            'slug' => "video-editing",
        ]);
    }
}
