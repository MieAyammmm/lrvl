<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'name' => 'tuladha',
            'email' => 'tuladha@example.com',
            'password' => bcrypt('password123')
        ]);
    }
}