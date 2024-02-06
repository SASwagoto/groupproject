<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@law.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), //12345678
            'remember_token' => Str::random(10),
        ])->assignRole('Super-Admin');

        User::create([
            'name' => 'KD Pathak',
            'email' => 'kd@law.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), //12345678
            'remember_token' => Str::random(10),
        ])->assignRole('Lawyer');
    }
}
