<?php

namespace App\Database\Seeds;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $paymentmethod = new PaymentMethod();
        $paymentmethod->name = 'Efectivo';
        $paymentmethod->code = 'E';
        $paymentmethod->save();

        $paymentmethod = new PaymentMethod();
        $paymentmethod->name = 'Tarjeta de Credito';
        $paymentmethod->code = 'TC';
        $paymentmethod->save();

        $paymentmethod = new PaymentMethod();
        $paymentmethod->name = 'Tarjeta de Debito';
        $paymentmethod->code = 'TD';
        $paymentmethod->save();

        // or

        // PaymentMethod::create([
        //    'field' => 'value'
        // ]);
    }
}
