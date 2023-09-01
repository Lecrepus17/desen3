<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'admin' => true,
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('123'),
            'admin' => false,
        ]);
        User::create([
            'name' => 'User3',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('123'),
            'admin' => false,
        ]);
        User::create([
            'name' => 'User4',
            'email' => 'user4@gmail.com',
            'password' => Hash::make('123'),
            'admin' => false,
        ]);
        User::create([
            'name' => 'User5',
            'email' => 'user5@gmail.com',
            'password' => Hash::make('123'),
            'admin' => false,
        ]);
    }
}
