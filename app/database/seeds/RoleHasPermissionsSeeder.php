<?php

namespace App\Database\Seeds;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RoleHasPermission;
use Illuminate\Database\Seeder;

class RoleHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records
        $administrador = Role::where("name", "like", "%Admin%")->first();
        $vendedor = Role::where("name", "like", "%Vendedor%")->first();
        $permissions = Permission::all();
        //poner todos los permisos al rol administrador
        foreach ($permissions as $permission) {
            $rolehaspermission = new RoleHasPermission();
            $rolehaspermission->permission_id = $permission->id;
            $rolehaspermission->role_id = $administrador->id;
            $rolehaspermission->save();
        }

        // Vendedor
//        $roles_for_user = [1, 7, 8, 9, 10];
//        foreach ($roles_for_user as $role) {
//            $rolehaspermission = new RoleHasPermission();
//            $rolehaspermission->permission_id = $role;
//            $rolehaspermission->role_id = $vendedor->id;
//            $rolehaspermission->save();
//        }

        // or

        // RoleHasPermission::create([
        //    'field' => 'value'
        // ]);
    }
}
