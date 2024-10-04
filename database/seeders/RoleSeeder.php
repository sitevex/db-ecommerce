<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['name' => 'customer', 'description' => '', 'active' => true],
            ['name' => 'Administrator', 'description' => '', 'active' => true],
            ['name' => 'Technician', 'description' => 'Operates medical equipment and technology', 'active' => true],
        ]);
    }
}
