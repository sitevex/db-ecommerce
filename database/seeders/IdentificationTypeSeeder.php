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
            ['name' => 'Cedula', 'slug' => 'cedula', 'status' => 'active'],
            ['name' => 'RUC', 'slug' => 'ruc', 'status' => 'active'],
            ['name' => 'Passport', 'slug' => 'passport', 'status' => 'active'],
            ['name' => 'Driver’s License', 'slug' => 'drivers-license', 'status' => 'active'],
            ['name' => 'National ID', 'slug' => 'national-id', 'status' => 'active'],
            ['name' => 'Social Security Number', 'slug' => 'social-security-number', 'status' => 'active'],
            ['name' => 'Work Permit', 'slug' => 'work-permit', 'status' => 'active'],
        ]);
    }
}
