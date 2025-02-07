<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_details')->insert([
        ["user_id" => 1,"address" => "ADMIN ADDRESS","phone" => 12345,"city" => "ADMIN CITY"],
        ["user_id" => 2,"address" => "USER ADDRESS","phone" => 1234,"city" => "USER CITY"],
        ]
        );
    }
}
