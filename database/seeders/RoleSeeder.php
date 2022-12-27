<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrator'
        ]);

        Role::create([
            'name' => 'Kader'
        ]);

        Role::create([
            'name' => 'Pengunjung'
        ]);

     
    }
}
