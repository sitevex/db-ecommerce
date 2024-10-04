<?php

namespace Database\Seeders;

use App\Models\IdentificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IdentificationType::insert([
            ['name' => 'Cedula', 'status' => 'active'],
            ['name' => 'RUC', 'status' => 'active'],
            ['name' => 'Passport', 'status' => 'active'],
            ['name' => 'Driver’s License', 'status' => 'active'],
            ['name' => 'National ID', 'status' => 'active'],
            ['name' => 'Social Security Number', 'status' => 'active'],
            ['name' => 'Work Permit', 'status' => 'active'],
        ]);
    }
}
