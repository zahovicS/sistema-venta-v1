<?php

namespace App\Database\Seeds;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records
        // al user id 1 ponerle admin
        $roleuser = new RoleUser();
        $roleuser->role_id = 1;
        $roleuser->user_id = 1;
        $roleuser->save();

        $roleuser = new RoleUser();
        $roleuser->role_id = 2;
        $roleuser->user_id = 2;
        $roleuser->save();

        $user = User::find(2);
        $user->store_id = 1;
        $user->save();

        // or

        // RoleUser::create([
        //    'field' => 'value'
        // ]);
    }
}
