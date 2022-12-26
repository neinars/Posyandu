<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adminid',
            'username' => 'adminidi',
            'email' =>'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
        
        User::create([
            'name' => 'Kaderid',
            'username' => 'kaderidi',
            'email' =>'kader@admin.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'Pengunjungid',
            'username' => 'pengunjungidi',
            'email' =>'pengunjung@admin.com',
            'password' => bcrypt('password'),
        ]);

        UserRole::create([
            'user_id' => 1,
            'role_id' => 1
        ]);
        
        UserRole::create([
            'user_id' => 2,
            'role_id' => 2
        ]);

        UserRole::create([
            'user_id' => 3,
            'role_id' => 3
        ]);
    }
}
