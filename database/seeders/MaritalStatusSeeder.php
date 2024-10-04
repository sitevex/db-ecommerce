<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaritalStatus::insert([
            ['name' => 'Soltero', 'status' => 'active'],
            ['name' => 'Casado', 'status' => 'active'],
            ['name' => 'Divorciado', 'status' => 'active'],
            ['name' => 'Viudo', 'status' => 'active'],
            ['name' => 'Unión libre', 'status' => 'active'],
            ['name' => 'Otro', 'status' => 'active'],
        ]);
    }
}
