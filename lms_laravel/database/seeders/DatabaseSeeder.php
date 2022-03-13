<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(10)->create();
        
        DB::table("users")
        ->insert([
        ["name"=>"Gurpinder singh","email"=>"singh@gmail.com","phone_num"=>"9855350302","password"=>Hash::make("password")],
        ["name"=>"Gurjot singh", "email"=> "saggu@gmail.com","phone_num"=>"9853530302","password"=>Hash::make("password")],
        ["name"=>"Harkomal singh", "email"=> "harkomal@gmail.com","phone_num"=>"9852020302","password"=>Hash::make("password")],
        ["name"=>"Mohammad Raja", "email"=> "rajamd@gmail.com","phone_num"=>"6555350302","password"=>Hash::make("password")],
        ["name"=>"Gurpreet Singh", "email"=> "kaul@gmail.com","phone_num"=>"6355350302","password"=>Hash::make("password")], 
        ]);
    }
}
