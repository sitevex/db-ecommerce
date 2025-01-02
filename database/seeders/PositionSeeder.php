<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'ASISTENTE CONTABLE',
            'ASISTENTE DE BODEGA',
            'ASISTENTE DE BODEGA - CONDUCTOR',
            'ASISTENTE DE CAJA',
            'ASISTENTE DE COMMUNITY MANAGER',
            'ASISTENTE DE CREDITO Y COBRANZAS',
            'ASISTENTE DE GARANTIAS',
            'ASISTENTE DE GERENCIA',
            'ASISTENTE DE IMPORTACIONES',
            'ASISTENTE DE LIMPIEZA',
            'ASISTENTE DE TESORERÍA',
            'ASISTENTE DE VENTAS',
            'ASISTENTE TECNICO',
            'ASOCIADA DE MARKETING',
            'AUDITORÍA',
            'AUXILIAR DE DISEÑO GRAFICO',
            'AUXILIAR DE VENTAS',
            'CAJA',
            'CHOFER',
            'COMPRAS',
            'CONDUCTOR',
            'COORDINACION NACIONAL DE VENTAS',
            'COORDINADOR DE BODEGA',
            'COORDINADOR MARCA',
            'COORDINADOR TECNICO',
            'COORDINADORA ADMINISTRATIVA',
            'COORDINADORA DE CREDITO Y COBRANZAS',
            'COORDINADORA DE MARCA',
            'DESARROLLADOR FULL STACK',
            'DISEÑADOR GRÁFICO',
            'EJECUTIVO/A DE VENTAS',
            'EJECUTIVO/A DE VENTAS JUNIOR',
            'ESPECIALISTA DE MARCA XMART',
            'GERENTE ADMINISTRATIVA',
            'GERENTE GENERAL',
            'INGENIERO ESPECIALISTA EN ELECTRONICA',
            'JEFE ADMINISTRATIVA',
            'JEFE DE BODEGA',
            'JEFE DE CAJA',
            'JEFE DE CONTABILIDAD',
            'JEFE DE MARKETING',
            'JEFE DE PRODUCTO',
            'JEFE DE VENTAS',
            'JEFE REGIONAL DE VENTAS',
            'JEFE TALENTO HUMANO',
            'JEFE TECNICO',
            'KEY ACCOUNT MANAGER',
            'MENSAJERO',
            'PRODUCT MANAGER',
            'PRODUCT MANAGER INTELBRAS',
            'PRODUCTOR AUDIOVISUAL - SOCIAL MEDIA',
            'TECNICO EN INGENIERIA Y PROYECTOS'
        ];

        foreach ($positions as $position) {
            DB::table('positions')->insert([
                'name' => $position,
                'slug' => Str::slug($position, '-'),
                'description' => $position . ' description here.',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
