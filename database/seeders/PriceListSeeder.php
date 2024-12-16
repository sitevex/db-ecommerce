<?php

namespace Database\Seeders;

use App\Models\PriceList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PriceList::insert([
            ['name' => 'Lista de precio base zc', 'slug' => 'lista-de-precio-base-zc', 'status' => 'active'],
            ['name' => 'Lista Distribuidor A', 'slug' => 'lista-distribuidor-a', 'status' => 'active'],
            ['name' => 'Lista 3% Distribuidor AA', 'slug' => 'lista-distribuidor-aa', 'status' => 'active'],
            ['name' => 'Lista 5% Distribuidor AAA', 'slug' => 'lista-distribuidor-aaa', 'status' => 'active'],
            ['name' => 'Lista Proyectos CORP', 'slug' => 'lista-proyecto-corp', 'status' => 'active'],
        ]);
    }
}
