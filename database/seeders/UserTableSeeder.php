<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [   'name' => "irham",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('123'),
            'role' => '1'
        ],
        [    'name' => "kucing",
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('123'),
            'role' => '2'
        ],
        [    'name' => "lecture",
            'email' => 'lecturer@gmail.com',
            'password' => Hash::make('password'),
            'role' => '1'
        ],
            
        ]);
    }
}
