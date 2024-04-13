<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::create([
            'first_name' => 'Customer Jon Doe',
            'last_name' => 'User',
            'email' => 'jondoe@tonistyle.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'phone' => '07047474422',
            'passport' => 'logo.png'
        ]);


         User::create([
            'first_name' => 'Customer Alex Smith',
            'last_name' => 'User',
            'email' => 'alex@tonistyle.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'phone' => '07047474433',
            'passport' => 'logo.png'
        ]);

    }
}
