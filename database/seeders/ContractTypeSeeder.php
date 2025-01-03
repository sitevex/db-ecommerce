<?php

namespace Database\Seeders;

use App\Models\ContractType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContractType::insert([
            ['name' => 'Indefinido', 'slug' => 'indefinido', 'description' => 'Contrato sin fecha de término.', 'status' => 'active'],
            ['name' => 'Emergente', 'slug' => 'emergente', 'description' => 'Contrato para situaciones de crisis o emergencia.', 'status' => 'active'],
            ['name' => 'Temporal', 'slug' => 'temporal', 'description' => 'Contrato por tiempo limitado.', 'status' => 'active'],
            ['name' => 'Por Obra', 'slug' => 'por-obra', 'description' => 'Contrato por la duración de un proyecto o tarea específica.', 'status' => 'active'],
            ['name' => 'Eventual', 'slug' => 'eventual', 'description' => 'Contrato para cubrir necesidades específicas en un periodo corto.', 'status' => 'active'],
        ]);
    }
}
