<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::insert([
            ['name' => 'Matriz Guayaquil', 'code' => 'MGYQ', 'address' => 'Parque Empresarial NEXUS Solar: 1,2,3,4,5 Mz: 6421', 'city_id' => '1', 'state_id' => '1', 'country_id' => '1'],
            ['name' => 'Sucursal Quito', 'code' => 'SUIO', 'address' => 'Av. Los Shyris N42-148 y Tomás de Berlanga.', 'city_id' => '1', 'state_id' => '1', 'country_id' => '1'],
        ]);
    }
}
