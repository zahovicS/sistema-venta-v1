<?php

namespace App\Database\Seeds;

use App\Models\Currency;
use App\Database\Factories\CurrencyFactory;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $currency = new Currency();
        $currency->name = 'Nuevos soles Peruanos';
        $currency->code = 'Soles Peruanos';
        $currency->symbol = 'S/';
        $currency->save();

        // or

        // Currency::create([
        //    'field' => 'value'
        // ]);
    }
}
