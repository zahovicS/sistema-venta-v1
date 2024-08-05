<?php
namespace App\Database\Seeds;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records

        $documentTypeDNI = new DocumentType();
        $documentTypeDNI->name = 'DNI';
        $documentTypeDNI->min_length = 8;
        $documentTypeDNI->save();

        $documentTypeRUC = new DocumentType();
        $documentTypeRUC->name = 'RUC';
        $documentTypeRUC->min_length = 11;
        $documentTypeRUC->save();
    }
}
