<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 8; $i++) {
            User::create([
                'name' => 'Teacher ' . $i,
                'role' => 'Teacher',
                'gender' => 'Male', // You can adjust the gender as needed
                'DateDeNaissance' => '1990-01-01', // Adjust the date of birth
                'email' => 'teacher' . $i . '@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // You may hash the password using bcrypt
                'image' => 'blog/5iDdZ6OcTViTaStEBHW2D2mOCL2S6fg0YfVJrJ93.jpg', // Assuming this is a default image
                'class_id' => null, // Assuming teachers don't belong to a specific class
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

