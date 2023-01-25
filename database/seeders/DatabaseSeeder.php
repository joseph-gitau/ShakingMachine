<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => true
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => false
            ],
            [
                'name' => 'User2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => false
            ],
            [
                'name' => 'User3',
                'email' => 'user3@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => false
            ],
            [
                'name' => 'User4',
                'email' => 'user4@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => false
            ],
            [
                'name' => 'User5',
                'email' => 'user5@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => false
            ],
        ]);
    }
}
