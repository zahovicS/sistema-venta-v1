<?php

namespace App\Database\Seeds;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $documentType = new DocumentType();
        $documentType->name = 'DNI';
        $documentType->min_length = 8;
        $documentType->save();

        $documentType = new DocumentType();
        $documentType->name = 'RUC';
        $documentType->min_length = 11;
        $documentType->save();

    }
}
