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
            ['name' => 'Read only', 'slug' => 'read-only', 'description' => 'Permission to view the view in the system', 'active' => true],
            ['name' => 'Just edit', 'slug' => 'just-edit', 'description' => 'Permission to edit the details of a record', 'active' => true],
            ['name' => 'Just delete', 'slug' => 'just-delete', 'description' => 'Permission to delete (draft status) a record', 'active' => true],
            ['name' => 'Manage roles', 'slug' => 'manage-roles', 'description' => 'Permission to manage user roles', 'active' => true],
            ['name' => 'Lack authorization', 'slug' => 'lack-authorization', 'description' => 'lack of authorization no permission applies', 'active' => true],
        ]);
    }
}
