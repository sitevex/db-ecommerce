<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            /* UserTypeSeeder::class, */    /* NO */

            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,

            BranchSeeder::class,
            DepartmentSeeder::class,
            ContractTypeSeeder::class,
            LaborActionSeeder::class,
            IdentificationTypeSeeder::class, 
            MaritalStatusSeeder::class,
            RelationshipSeeder::class,
            PositionSeeder::class,

            /* UserSeeder::class, */

            /* RoleSeeder::class,
            PermissionSeeder::class, */

            /* SupplierSeeder::class */

            /* CustomerCategorySeeder::class, */
            /* CustomerSeeder::class, */

            /* EmployeeSeeder::class, */

            BusinessLineSeeder::class,
            BrandSeeder::class,
            SubgroupsSeeder::class,

            /* WarehouseSeeder::class, */
            /* PriceListSeeder::class, */
            /* ProductSeeder::class, */
        ]);
    }
}
