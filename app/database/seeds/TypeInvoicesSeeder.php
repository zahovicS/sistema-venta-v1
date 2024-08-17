<?php

namespace App\Database\Seeds;

use App\Models\TypeInvoice;
use Illuminate\Database\Seeder;

class TypeInvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $typeinvoice = new TypeInvoice();
        $typeinvoice->name = 'Ticket de venta';
        $typeinvoice->code = 'T';
        $typeinvoice->save();
    }
}
