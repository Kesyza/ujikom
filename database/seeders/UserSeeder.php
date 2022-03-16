<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrator'
        ]);

        $user = new User;
        $user->name = 'Admin Tryout';
        $user->email = 'administrator@gmail.com';
        $user->password = Hash::make('1234567890');
        $user->save();

        $user->attachRole($admin);
    }
}
