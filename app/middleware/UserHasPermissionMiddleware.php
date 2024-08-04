<?php

namespace App\Middleware;

use App\Models\RoleUser;
use Leaf\Middleware;

class UserHasPermissionMiddleware extends Middleware
{
    public function call()
    {
        $route = app()->getRoute();
        $permission = $route["name"];
        if (request()->isAjax() && !_user_can($permission)) {
            response()->json([
                "status" => "error",
                "message" => "No tienes permiso para acceder a este ruta.",
            ], 403);
            die;
        } else if (!_user_can($permission)) {
            response()->page(ViewsPath('errors/403.html', false), 403);
            die;
        }
    }
}
