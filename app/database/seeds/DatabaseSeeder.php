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
        $this->call(UsersSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(StoresSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RoleHasPermissionsSeeder::class);
        $this->call(RoleUser::class);
        $this->call(DocumentTypesSeeder::class);
        $this->call(ClientsSeeder::class);
        $this->call(PaymentMethodsSeeder::class);
        $this->call(TypeInvoicesSeeder::class);
        $this->call(CurrenciesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(BrandsSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(StatusProductsStoresSeeder::class);
    }
}
