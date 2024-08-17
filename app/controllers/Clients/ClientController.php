<?php

namespace App\Controllers\Clients;

use App\Controllers\Controller;
use App\Services\Clients\ClientService;

class ClientController extends Controller
{
    private ClientService $clientService;
    public function __construct(){
        $this->clientService = new ClientService();
    }
    public function index()
    {
        render('client');
    }

    public function get_top_potential_clients(){
        try {
            $potential_clients = $this->clientService->top_potential_clients(5);
            return response()->json(["status" => "success", "potential_clients" => $potential_clients]);
        }catch (Exception $exception){
            return response()->json(["status" => "error", "message" => $exception->getMessage()],500);
        }
    }
}
