<?php

namespace App\Services\Clients;

use App\Enums\Clients\ClientStatusEnum;
use App\Models\Client;

class ClientService
{

    public function top_potential_clients(int $number_clients)
    {
        $potential_clients = Client::where("status", ClientStatusEnum::ACTIVE)
            ->limit($number_clients)
            ->get();
        return $potential_clients;
    }
}
