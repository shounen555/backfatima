<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed the 'users' table with sample data
        DB::table('users')->insert([
            'name'              => 'oumaima',
            'email'             => 'oumaima@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('fatima123alfihriya'),
            'role'              => 'admin',
        ]);

        // Seed the 'users' table with sample data
        DB::table('users')->insert([
            'name'              => 'omar',
            'email'             => 'omar@gmail.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('fatima123alfihriya'),
            'role'              => 'admin',
        ]);
    }
}