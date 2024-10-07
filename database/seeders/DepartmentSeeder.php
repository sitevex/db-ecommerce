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
            ['name' => 'Administración', 'slug' => 'administracion', 'description' => '', 'staff_quantity' => 25, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Auditoría', 'slug' => 'auditoria', 'description' => '', 'staff_quantity' => 1, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Bodega', 'slug' => 'bodega', 'description' => '', 'staff_quantity' => 10, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Caja', 'slug' => 'caja', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'inactive'],
            ['name' => 'Contabilidad', 'slug' => 'contabilidad', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Crédito', 'slug' => 'credito', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Innovación y Tecnología', 'slug' => 'innovacion-y-tecnologia', 'description' => '', 'staff_quantity' => 2, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Marketing', 'slug' => 'marketing', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Talento Humano', 'slug' => 'talento-humano', 'description' => '', 'staff_quantity' => 1, 'is_medical' => false, 'status' => 'inactive'],
            ['name' => 'Técnico', 'slug' => 'tecnico', 'description' => '', 'staff_quantity' => 5, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Ventas', 'slug' => 'ventas', 'description' => '', 'staff_quantity' => 10, 'is_medical' => false, 'status' => 'active'],
            ['name' => 'Customer', 'slug' => 'customer', 'description' => '', 'staff_quantity' => 0, 'is_medical' => false, 'status' => 'active'],
        ]);
    }
}
