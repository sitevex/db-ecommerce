<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::insert([
            ['name' => 'Administración', 'description' => '', 'staff_quantity' => 25, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Auditoría', 'description' => '', 'staff_quantity' => 1, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Bodega', 'description' => '', 'staff_quantity' => 10, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Caja', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'inactive'],
            ['name' => 'Contabilidad', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Crédito', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Innovación y Tecnología', 'description' => '', 'staff_quantity' => 2, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Marketing', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Talento Humano', 'description' => '', 'staff_quantity' => 1, 'is_medical' => false, 'status' => 'inactive'],
            ['name' => 'Técnico', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Ventas', 'description' => '', 'staff_quantity' => 10, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Customer', 'description' => '', 'staff_quantity' => 0, 'is_medical' => false, 'status' => 'active'],
        ]);
    }
}
