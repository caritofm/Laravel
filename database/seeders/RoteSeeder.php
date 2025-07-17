<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'admin'
        ]);
         Role::create([
            'id' => 2,
            'name' => 'staff'
        ]);
         Role::create([
            'id' => 3,
            'name' => 'user'
        ]);

        DB::table('role_user') ->insert([
            'role_id' =>1,
            'user_id' =>1,

        ]);
           DB::table('role_user') ->insert([
            'role_id' =>3,
            'user_id' =>2,
            
           ]);
               DB::table('role_user') ->insert([
            'role_id' =>3,
            'user_id' =>4,
            
           ]);
    }
}
