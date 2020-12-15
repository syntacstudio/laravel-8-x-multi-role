<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create user for admin
        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = 'admin@test.app';
        $admin->password = Hash::make('secret');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());

        // Create user for manager
        $manager = new User();
        $manager->name = 'Manager';
        $manager->email = 'manager@test.app';
        $manager->password = Hash::make('secret');
        $manager->save();
        $manager->roles()->attach(Role::where('name', 'manager')->first());

    }
}
