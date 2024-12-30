<?php

namespace Database\Seeders;

use App\Models\Relationship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Relationship::insert([
            ['name' => 'ABUELO(A) MAT', 'slug' => 'ABUELO(A)_MAT', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'ABUELO(A) PAT', 'slug' => 'ABUELO(A)_PAT', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'AMIGO(A)', 'slug' => 'AMIGO(A)', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'CONYUGE', 'slug' => 'CONYUGE', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'HERMANO/A', 'slug' => 'HERMANO/A', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'HIJO(A)', 'slug' => 'HIJO(A)', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'MADRE', 'slug' => 'MADRE', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'OTRO PARIENTE', 'slug' => 'OTRO_PARIENTE', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'PADRE', 'slug' => 'PADRE', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'PRIMO(A) MAT', 'slug' => 'PRIMO(A)_MAT', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'PRIMO(A) PAT', 'slug' => 'PRIMO(A)_PAT', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'TIO(A) MAT', 'slug' => 'TIO(A)_MAT', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'TIO(A) PAT', 'slug' => 'TIO(A)_PAT', 'type' => 'familiar', 'status' => 'active'],
            ['name' => 'COLEGA', 'slug' => 'COLEGA', 'type' => 'laboral', 'status' => 'active'],
            ['name' => 'JEFE', 'slug' => 'JEFE', 'type' => 'laboral', 'status' => 'active'],
            ['name' => 'SUBORDINADO', 'slug' => 'SUBORDINADO', 'type' => 'laboral', 'status' => 'active'],
            ['name' => 'OTRO CONTACTO', 'slug' => 'OTRO_CONTACTO', 'type' => 'otro', 'status' => 'active'],
        ]);
    }
}
