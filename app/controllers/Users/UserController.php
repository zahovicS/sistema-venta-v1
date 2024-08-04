<?php

namespace App\Controllers\Users;

use App\Controllers\Controller;
use App\Services\Users\UserService;
use Leaf\Http\Request;
use Exception;
class UserController extends Controller
{
    private UserService $userService;
    public function __construct()
    {
        parent::__construct();
        $this->userService = new UserService();
    }

    public function index()
    {
        render('user');
    }

    public function set_store_user(){
        try {
            $this->userService->set_store_to_user($this->data["store_id"]);
            return response()->json(["status" => "success", "message" => "Se asignó la tienda al usuario."]);
        }catch (Exception $exception){
            return response()->json(["status" => "error", "message" => $exception->getMessage()]);
        }
    }
}
