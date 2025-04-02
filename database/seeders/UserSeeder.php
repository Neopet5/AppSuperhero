<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create ([

            'name' => 'Admin',
            'email' => 'jpromulo17@gmail.com',
            'password' => Hash::make('password123'), // Hasheando la contraseña
            'email_verified_at' => now(),

        ]);
    }
}
