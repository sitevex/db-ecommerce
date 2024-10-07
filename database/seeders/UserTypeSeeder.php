<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::insert([
            ['name' => 'Customer', 'slug'=> 'customer', 'description' => '', 'status' => 'active', 'department_id' => 12],
            ['name' => 'Administrator', 'slug'=> 'administrator', 'description' => '', 'status' => 'active', 'department_id' => 3],
            ['name' => 'Technician', 'slug'=> 'technician', 'description' => 'Operates medical equipment and technology', 'status' => 'active', 'department_id' => 4],
        ]);
    }
}
