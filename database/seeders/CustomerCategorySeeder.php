<?php

namespace Database\Seeders;

use App\Models\CustomerCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // CustomerCategory::factory()->count(10)->create();
        CustomerCategory::insert([
            ['name' => 'Precio Base ZC', 'slug' => 'precio-base-zc', 'status' => 'active'],
            ['name' => 'Distribuidor A', 'slug' => 'distribuidor-a', 'status' => 'active'],
            ['name' => 'Distribuidor AA', 'slug' => 'distribuidor-aa', 'status' => 'active'],
            ['name' => 'Distribuidor AAA', 'slug' => 'distribuidor-aaa', 'status' => 'active'],
            ['name' => 'Proyecto CORP', 'slug' => 'proyecto-corp', 'status' => 'active'],
        ]);
    }
}
