<?php
namespace App\Database\Seeds;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        // $permission = new Permission();
        // $permission->field = 'value';
        // $permission->save();

        // or

        // Permission::create([
        //    'field' => 'value'
        // ]);

         Permission::insert([
             [
                 'name' => 'dashboard',
                 'alias' => 'dashboard',
             ],
             [
                 'name' => 'clients',
                 'alias' => 'clientes',
             ],
             [
                 'name' => 'categories',
                 'alias' => 'categorias',
             ],
             [
                 'name' => 'brands',
                 'alias' => 'marcas',
             ],
             [
                 'name' => 'products',
                 'alias' => 'productos',
             ],
             [
                 'name' => 'users',
                 'alias' => 'usuarios',
             ],
             [
                 'name' => 'sales',
                 'alias' => 'ventas',
             ],
             [
                 'name' => 'sales.list',
                 'alias' => 'Lista de ventas',
             ],
             [
                 'name' => 'sales.pos',
                 'alias' => 'POS de venta',
             ],
             [
                 'name' => 'sales.reports',
                 'alias' => 'Reportes de venta',
             ],
             [
                 'name' => 'stores',
                 'alias' => 'Tiendas',
             ],
             [
                 'name' => 'stores.get-all-stores',
                 'alias' => '-',
             ],
             [
                 'name' => 'users.set-store-user',
                 'alias' => '-',
             ],
         ]);
    }
}
