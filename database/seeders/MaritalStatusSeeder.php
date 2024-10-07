<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaritalStatus::insert([
            ['name' => 'Soltero', 'slug' => 'soltero', 'status' => 'active'],
            ['name' => 'Casado', 'slug' => 'casado', 'status' => 'active'],
            ['name' => 'Divorciado', 'slug' => 'divorciado', 'status' => 'active'],
            ['name' => 'Viudo', 'slug' => 'viudo', 'status' => 'active'],
            ['name' => 'Unión libre', 'slug' => 'union-libre', 'status' => 'active'],
            ['name' => 'Otro', 'slug' => 'otro', 'status' => 'active'],
        ]);
    }
}
