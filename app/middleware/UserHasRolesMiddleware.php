<?php

namespace App\Middleware;

use App\Models\RoleUser;
use Leaf\Middleware;

class UserHasRolesMiddleware extends Middleware
{
    public function call()
    {

        $roles_users = RoleUser::where("user_id", auth()->user()["id"])->count();
        if (request()->isAjax() && $roles_users == 0) {
            response()->json([
                "status" => "error",
                "message" => "No tienes roles asignados.",
            ], 403);
            die;
        } else if ($roles_users == 0) {
            auth()->guard('auth');
            auth()->logout();
            session()->set("message_auth", "No tienes roles asignados.");
            return redirect(_route("auth.login"));
        }
        return $this->next();
    }
}
