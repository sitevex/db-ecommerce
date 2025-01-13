<?php

namespace Database\Seeders;

use App\Models\LaborAction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaborActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LaborAction::insert([
            // ['name' => 'Contratación', 'slug' => 'contratacion', 'description' => 'Proceso mediante el cual se incorpora a una persona a la organización como empleado.', 'status' => 'active'],
            // ['name' => 'Integración', 'slug' => 'integracion', 'description' => 'Proceso de bienvenida y capacitación inicial para que un nuevo empleado se adapte a la cultura, políticas y funciones de la organización.', 'status' => 'active'],
            ['name' => 'Promoción', 'slug' => 'promocion', 'description' => 'Cambio a un puesto superior con mayores responsabilidades y, generalmente, mejores beneficios.', 'status' => 'active'],
            ['name' => 'Transferencia', 'slug' => 'transferencia', 'description' => 'Movimiento de un empleado a un puesto diferente dentro de la misma organización, ya sea en la misma o en otra ubicación.', 'status' => 'active'],
            ['name' => 'Terminación', 'slug' => 'terminacion', 'description' => 'Finalización del vínculo laboral entre un empleado y la organización, ya sea por decisión del empleado o de la empresa.', 'status' => 'active'],
            ['name' => 'Recontratación', 'slug' => 'recontratacion', 'description' => 'Proceso de volver a emplear a una persona que previamente había trabajado en la organización.', 'status' => 'active'],
            ['name' => 'Capacitación', 'slug' => 'capacitacion', 'description' => 'Actividades destinadas a mejorar las habilidades, competencias o conocimientos de un empleado.', 'status' => 'active'],
            ['name' => 'Cambio de Contrato', 'slug' => 'cambio_contrato', 'description' => 'Modificación en las condiciones laborales estipuladas en el contrato, como duración, salario o tipo de contrato.', 'status' => 'active'],
            ['name' => 'Reconocimiento', 'slug' => 'reconocimiento', 'description' => 'Acción de destacar y recompensar los logros, esfuerzos o contribuciones sobresalientes de un empleado.', 'status' => 'active'],
            ['name' => 'Cambio de Rol', 'slug' => 'cambio_rol', 'description' => 'Modificación en las responsabilidades o funciones asignadas al empleado dentro de la organización.', 'status' => 'active'],
        ]);
    }
}
