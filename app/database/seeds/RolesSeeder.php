<?php

namespace App\Database\Seeds;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $role = new Role();
        $role->name = 'Administrador';
        $role->save();

        $role = new Role();
        $role->name = 'Vendedor';
        $role->save();

        // or

        // Role::create([
        //    'field' => 'value'
        // ]);
    }
}
