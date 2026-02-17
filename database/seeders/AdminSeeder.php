<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'System Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Always hash your passwords!
            'role' => 'admin',
            'profile_img' => null,
            'address' => json_encode([
                'street' => '123 Tech Lane',
                'city' => 'Dhaka',
                'country' => 'Bangladesh',
            ]),
            'email_verified_at' => now(),
        ]);
    }
}
