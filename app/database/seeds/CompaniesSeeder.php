<?php

namespace App\Database\Seeds;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $company = new Company();
        $company->company_document = '10078713459';
        $company->company_name = 'LA BAHÍA DE PARACAS';
        $company->address = 'Calle las zonas romero N120';
        $company->save();

        // or

        // Company::create([
        //    'field' => 'value'
        // ]);
    }
}
