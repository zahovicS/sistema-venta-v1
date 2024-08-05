<?php

function _user_can($permission): bool
{
    try {
        $user = auth()->user();
        $permission = \App\Models\Permission::where("name", $permission)->firstOrFail();
        $user_role = \App\Models\RoleUser::where("user_id", $user["id"])
            ->firstOrFail();
        \App\Models\RoleHasPermission::where("permission_id", $permission->id)
            ->where("role_id", $user_role->role_id)
            ->firstOrFail();
        return true;
    } catch (\Exception $e) {
        return false;
    }
}

function _user_has_role($role): bool
{
    try {
        $user = auth()->user();
        $role = \App\Models\Role::where("name", $role)->firstOrFail();
        \App\Models\RoleUser::where("user_id", $user["id"])
            ->where("role_id", $role->id)
            ->firstOrFail();
        return true;
    } catch (\Exception $e) {
        return false;
    }
}

function _user_doesnt_store(){
    try {
        return empty(auth()->user()["store_id"]);
    } catch (\Exception $e) {
        return false;
    }
}

function _user_has_store(){
    try {
        return !empty(auth()->user()["store_id"]);
    } catch (\Exception $e) {
        return false;
    }
}

/**
 * Retorna la tienda del usuario
 * @return null|\App\Models\Store
 */
function _user_get_store(){
    try {
        $store_id = auth()->user()["store_id"];
        return \App\Models\Store::findOrFail($store_id);
    } catch (\Exception $e) {
        return null;
    }
}
