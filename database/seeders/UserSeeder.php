<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Pengunjung;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
=======
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> 850f8c5980aa80b8d463b62d1a94e170f9804ae3
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
<<<<<<< HEAD
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
=======
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
>>>>>>> 850f8c5980aa80b8d463b62d1a94e170f9804ae3
        ]);
    }
}
