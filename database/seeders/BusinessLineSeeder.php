<?php

namespace Database\Seeders;

use App\Models\BusinessLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusinessLine::insert([
            ['name' => 'CCTV', 'slug' => 'cctv', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'PROTECCION ELECT.', 'slug' => 'proteccion-elect', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'NETWORKING', 'slug' => 'networking', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'FIBRA OPTICA', 'slug' => 'fibra-optica', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'WIRELESS', 'slug' => 'wireless', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'TELEFONIA IP', 'slug' => 'telefonia-ip', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'POS', 'slug' => 'pos', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'SEG. ELECTRONICAS', 'slug' => 'seg-electronicas', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'ILUMINACION Y SEG.', 'slug' => 'iluminacion-y-seg', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'CLIMATIZACION', 'slug' => 'climatizacion', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'EQUIPOS DE COMPUTO', 'slug' => 'equipos-de-computo', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'CABLEADO ESTRUCTURAD', 'slug' => 'cableado-estructurad', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'CLOUD', 'slug' => 'cloud', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'REDES WIFI END 2 END', 'slug' => 'redes-wifi-end-2-end', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
            ['name' => 'EQUIPO DE ZC', 'slug' => 'equipo-de-zc', 'description' => null, 'image' => null, 'image_url' => null, 'status' => 'active'],
        ]);
    }
}
