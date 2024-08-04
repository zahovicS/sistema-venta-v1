<?php

namespace App\Database\Seeds;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $store = new Store();
        $store->company_id = 1;
        $store->name = 'LA BAHÍA DE PARACAS - terminal ica';
        $store->address = 'Calle los promotores 753';
        $store->save();

        $store = new Store();
        $store->company_id = 1;
        $store->name = 'LA BAHÍA DE PARACAS - terminal nazca';
        $store->address = 'Calle falsa 123';
        $store->save();

        // or

        // Store::create([
        //    'field' => 'value'
        // ]);
    }
}
