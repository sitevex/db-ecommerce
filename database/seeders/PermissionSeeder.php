<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            ['name' => 'read_only', 'description' => 'Permission to view the view in the system', 'active' => true],
            ['name' => 'just_edit', 'description' => 'Permission to edit the details of a record', 'active' => true],
            ['name' => 'just_delete', 'description' => 'Permission to delete (draft status) a record', 'active' => true],
            ['name' => 'manage_roles', 'description' => 'Permission to manage user roles', 'active' => true],
            ['name' => 'lack_authorization', 'description' => 'lack of authorization no permission applies', 'active' => true],
        ]);
    }
}
