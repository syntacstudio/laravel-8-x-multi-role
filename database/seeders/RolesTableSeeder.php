<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create role for admin
        Role::create(['name' => 'admin']);
        // Create role for manager
        Role::create(['name' => 'manager']);
    }
}
