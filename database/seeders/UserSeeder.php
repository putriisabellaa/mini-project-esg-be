<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password123'), // Enkripsi password
                'phone_number' => '081234567890',
                'address' => 'Jl. Example 1, Jakarta',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '081234567891',
                'address' => 'Jl. Example 2, Surabaya',
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael.johnson@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '081234567892',
                'address' => 'Jl. Example 3, Bandung',
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emily.davis@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '081234567893',
                'address' => 'Jl. Example 4, Yogyakarta',
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@example.com',
                'password' => Hash::make('password123'),
                'phone_number' => '081234567894',
                'address' => 'Jl. Example 5, Bali',
            ],
        ]);
    }
}
