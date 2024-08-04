<?php

namespace App\Controllers\Stores;

use App\Controllers\Controller;
use App\Enums\Stores\StoreStatusEnum;
use App\Models\Store;
use Illuminate\Contracts\Encryption\Encrypter;

class StoreController extends Controller
{
    public function index()
    {
        render('store');
    }

    public function get_all_stores()
    {
        $stores = Store::select('id', 'company_id', 'name')
            ->where('company_id', 1) //esto es por defecto ya que solo vamos a usar este
            ->where('status', StoreStatusEnum::ACTIVE)
            ->get();
        return response()->json($stores);
    }
}
