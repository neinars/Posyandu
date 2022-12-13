<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin'
        ]);
        $kader = Role::create([
            'name' => 'Kader'
        ]);
        $ortu = Role::create([
            'name' => 'Orang Tua Balita'
        ]);

        $user = User::create([
            'name' => 'anem',
            'email' => 'anem@gmail.com',
            'password' => Hash::make('password')

        ]);
        RoleUser::create([
            'user_id' => $user->id
        ]);
    }
}
