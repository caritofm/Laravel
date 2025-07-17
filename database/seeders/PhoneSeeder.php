<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::create([
            'prefix' =>34,
            'phone_number' => 66666,
            'user_id' =>2
        ]);

         Phone::create([
            'prefix' =>33,
            'phone_number' => 7777777,
            'user_id' =>2
        ]);
    }
}
