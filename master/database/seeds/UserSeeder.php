<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => "Bang Top",
            'username' => 'bangtop',
            'password' => Hash::make('password'),
            'address' => "Jl. Panjer",
            'phone_num' => "081381928592",
            'role_id' => 1,
            'status' => "active",
        ]);
        
        DB::table('users')->insert([
            'id' => 2,
            'name' => "Pegawai",
            'username' => 'pegawai',
            'password' => Hash::make('password'),
            'address' => "Jl. Hangtuah",
            'phone_num' => "081748275819",
            'role_id' => "2",
            'status' => "active",
        ]);
        
        DB::table('users')->insert([
            'id' => 3,
            'name' => "Member",
            'username' => 'member',
            'password' => Hash::make('password'),
            'address' => "Jl. Sedap",
            'phone_num' => "081381928592",
            'role_id' => "3",
            'status' => "active",
        ]);
    }
}
