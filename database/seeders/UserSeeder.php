<?php

namespace Database\Seeders;

use App\Models\Pengunjung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
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
        $roleadmin = Role::create([
            'role_name' => 'Admin',
        ]);
        $rolekader = Role::create([
            'role_name' => 'Kader',
        ]);
        $pengunjung = Role::create([
            'role_name' => 'Pengunjung',
        ]);

        $admin = User::create([
            'name' => 'Administrator',
            'username' => 'adminidi',
            'password' => Hash::make('password'),
        ]);

        RoleUser::create([
            'user_id' => $admin->id,
            'role_id' => $roleadmin->id,
        ]);

        $kader = User::create([
            'name' => 'Kader',
            'username' => 'kaderid',
            'password' => Hash::make('password'),
        ]);

        RoleUser::create([
            'user_id' => $kader->id,
            'role_id' => $rolekader->id,
        ]);

        $user = User::create([
            'name' => 'Viona Hesty',
            'username' => 'orangtua',
            'password' => Hash::make('password'),
        ]);
        Pengunjung::create([
            'name' => 'Vio',
            'NIK' => '3275356312345670',
            'address' => 'jalan doang, jadian kaga',
            'phone' => '081234567890',
            'jk' => 'Perempuan',
            'age' => '27',
            'user_id' => $user->id,
        ]);
        RoleUser::create([
            'user_id' => $user->id,
            'role_id' => $pengunjung->id,
        ]);
    }
}
