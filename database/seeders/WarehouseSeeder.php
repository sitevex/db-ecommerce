<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Datos para insertar
        $warehouses = [
            ['warehouse_code' => 'UIOCAR', 'name' => 'BODEGA CARCELEN', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'GYECENR', 'name' => 'BODEGA CUARENTENA EQUIPOS NUEVOS REPARACION', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYEHERRA', 'name' => 'BODEGA GUAYAQUIL HERRAMIENTAS TECNICOS', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYELAB', 'name' => 'BODEGA GUAYAQUIL LABORATORIO', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYEPROMO', 'name' => 'BODEGA GYE PROMOCION-REMATE', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYENEXUS', 'name' => 'BODEGA NEXUS', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYEJTM', 'name' => 'BODEGA NEXUS 8-9', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYEPAL', 'name' => 'BODEGA PRINCIPAL GYE', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'UIOPAL', 'name' => 'BODEGA PRINCIPAL UIO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'UIOHERRA', 'name' => 'BODEGA QUITO HERRAMIENTAS TECNICOS', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'UIOLAB', 'name' => 'BODEGA QUITO LABORATORIO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'UIOCENR', 'name' => 'BODEGA UIO CUARENTENA EQUIPOS NUEVOS REPARACION', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'UIOPROMO', 'name' => 'BODEGA UIO PROMOCION-REMATE', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'GYECONSG', 'name' => 'CONSIGNACION', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'IRCINOR', 'name' => 'CONSIGNACION PABLO', 'location' => 'Internacional', 'status' => 'active'],
            ['warehouse_code' => 'UIOCONSG', 'name' => 'CONSIGNACION UIO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'GYECRT', 'name' => 'CUARENTENA', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'UIOCRT', 'name' => 'CUARENTENA UIO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'GYEDEMO', 'name' => 'DEMO GYE', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'UIODEMO', 'name' => 'DEMO UIO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'GYEDECLI', 'name' => 'DEMO VISITA DE CLIENTES GUAYAQUIL', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'UIODECLI', 'name' => 'DEMO VISITA DE CLIENTES QUITO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'GYERMA', 'name' => 'GARANTIA GYE', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYERMAPR', 'name' => 'GARANTIA PROVEEDORES GYE', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'UIORMA', 'name' => 'GARANTIA UIO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'UIOSERV', 'name' => 'SERVIENTREGA UIO', 'location' => 'Quito', 'status' => 'active'],
            ['warehouse_code' => 'GYELATAM', 'name' => 'LATAM', 'location' => 'Guayaquil', 'status' => 'active'],
            ['warehouse_code' => 'GYESERV', 'name' => 'SERVIENTREGA GYE', 'location' => 'Guayaquil', 'status' => 'active'],
        ];

        // Insertar los datos en la tabla warehouses
        foreach ($warehouses as $warehouse) {
            DB::table('warehouses')->insert([
                'warehouse_code' => $warehouse['warehouse_code'],
                'name' => $warehouse['name'],
                'slug' => Str::slug($warehouse['name'], '-'),
                'location' => $warehouse['location'],
                'status' => $warehouse['status'],
            ]);
        }
    }
}
