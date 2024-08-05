<?php

namespace App\Database\Seeds;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed your application's database.
     * @return void
     */
    public function run(): array
    {
        return [
            UsersSeeder::class,
            CompaniesSeeder::class,
            StoresSeeder::class,
            RolesSeeder::class,
            PermissionsSeeder::class,
            RoleHasPermissionsSeeder::class,
            RoleUser::class,
            DocumentTypeSeeder::class,
            ClientSeeder::class
        ];
    }
}
