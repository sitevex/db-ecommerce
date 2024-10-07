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
            ['name' => 'Customer', 'slug' => 'customer' , 'description' => '', 'active' => true],
            ['name' => 'Administrator', 'slug' => 'administrator' , 'description' => '', 'active' => true],
            ['name' => 'Technician', 'slug' => 'technician' , 'description' => 'Operates medical equipment and technology', 'active' => true],
        ]);
    }
}
