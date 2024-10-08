<?php

namespace App\Services\Users;

use App\Models\User;
use Exception;
class UserService
{

    /**
     * Establece la tienda al usuario, si el usuario es null toma el de la sesión
     *
     * @param int $store_id
     * @param null|User $user
     * @return void
     * @throws Exception
     */

    public function set_store_to_user(int $store_id, ?User $user = null)
    {
        try {
            if (is_null($user)) {
                $user = User::findOrFail(auth()->user()["id"]);
            }
            $user->store_id = $store_id;
            $user->save();
            if (is_null($user)) {
                auth()->update(["store_id" => $store_id]);
            }
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
    /**
     * Elimina la tienda asignada el usuario, si el usuario es null toma el de la sesión
     *
     * @param null|User $user
     * @return void
     * @throws Exception
     */
    public function clear_store_to_user(?User $user = null)
    {
        try {
            if (is_null($user)) {
                $user = User::findOrFail(auth()->user()["id"]);
            }
            $user->store_id = null;
            $user->save();
            if (is_null($user)) {
                auth()->update(["store_id" => null]);
            }
        } catch (Exception $exception) {
            throw new Exception($exception->getMessage());
        }
    }
}
