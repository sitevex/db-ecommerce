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
            ['name' => 'customer', 'description' => '', 'status' => 'active', 'department_id' => 12],
            ['name' => 'Administrator', 'description' => '', 'status' => 'active', 'department_id' => 3],
            ['name' => 'Technician', 'description' => 'Operates medical equipment and technology', 'status' => 'active', 'department_id' => 4],
        ]);
    }
}
