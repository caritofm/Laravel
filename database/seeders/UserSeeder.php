<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   

          User::create([
            'id' => 5,
            'name' => 'Pedro',
            'email' =>'pedro@example.com',
            'password' => Hash::make('12345678')
        ]);
                  User::create([
            'id' => 6,
            'name' => 'Maria',
            'email' =>'maria@example.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
