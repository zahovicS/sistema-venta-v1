<?php

namespace App\Middleware;

use Leaf\Middleware;

class UserHasStoreMiddleware extends Middleware
{
    public function call()
    {
        $isVendedor = _user_has_role("Vendedor");
        if (request()->isAjax() && $isVendedor && empty(auth()->user()["store_id"])) {
            response()->json([
                "status" => "error",
                "message" => "No tienes una tienda asignada, pídele al administrador que te asigne una.",
            ], 403);
            die;
        } else if ($isVendedor && empty(auth()->user()["store_id"])) {
            auth()->guard('auth');
            auth()->logout();
            session()->set("message_auth", "No tienes una tienda asignada, pídele al administrador que te asigne una.");
            return redirect(_route("auth.login"));
        }

        return $this->next();
    }
}
