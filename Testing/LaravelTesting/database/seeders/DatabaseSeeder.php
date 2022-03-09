<?php

namespace Database\Seeders;

use Faker\Factory as faker;
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
        // $faker = faker::create();
        // // \App\Models\User::factory(10)->create();
        // for($i = 0; $i < 99 ; $i++){
        //     DB::table('users')->insert([
        //         "name"=>$faker->name,
        //         "email"=>$faker->email,
        //         "phone_num"=>$faker->phoneNumber,
        //         "password"=>Hash::make($faker->password)
        //     ]);
        // }
        
        // for($i = 0; $i < 99 ; $i++){
        //     DB::table('books')->insert([
        //         "title"=>$faker->name,
        //         "description"=>$faker->text,
        //         "publisher"=>$faker->domainName,
        //     ]);
        // }

        // for($i = 0;$i<99;$i++ ){
        //     $data = DB::table('borrow_books')
        //     ->insert([
        //         "user_id"=>rand(1,99),
        //         "book_id"=>rand(1,99)
        //     ]);

        // }

        DB::table("users")
        ->insert([
        ["name"=>"Gurpinder singh","email"=>"singh@gmail.com","phone_num"=>"9855350302","password"=>Hash::make("password")],
        ["name"=>"Gurjot singh", "email"=> "saggu@gmail.com","phone_num"=>"9853530302","password"=>Hash::make("password")],
        ["name"=>"Harkomal singh", "email"=> "harkomal@gmail.com","phone_num"=>"9852020302","password"=>Hash::make("password")],
        ["name"=>"Mohammad Raja", "email"=> "rajamd@gmail.com","phone_num"=>"6555350302","password"=>Hash::make("password")],
        ["name"=>"Gurpreet Singh", "email"=> "kaul@gmail.com","phone_num"=>"6355350302","password"=>Hash::make("password")], 
        ]);

        DB::table("books")
        ->insert([
            ["title"=>"fundamentals of DBMS","description"=>"All about databases","publisher"=>"Kalyani"],
            ["title"=>"Data Structures","description"=>"Introduction to data structures","publisher"=>"sanctum"],
            ["title"=>"Information technology","description"=>"Introduction to computer science","publisher"=>"Modern"],
            ["title"=>"Clean Code","description"=>"Guidelines to keep code clean","publisher"=>"dinesh"],
        ]);

        DB::table("borrow_books")
        ->insert([
            ["user_id"=>"1","book_id"=>"1"],
            ["user_id"=>"1","book_id"=>"2"],
            ["user_id"=>"2","book_id"=>"3"],
            ["user_id"=>"3","book_id"=>"1"],
            ["user_id"=>"4","book_id"=>"2"]
        ]);
    }
}
