<?php
namespace App\Database\Seeds;

use App\Models\Product;
use App\Models\StatusProductsStore;
use Illuminate\Database\Seeder;

class StatusProductsStoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $statusProducto = new StatusProductsStore();
            $statusProducto->product_id = $product->id;
            $statusProducto->store_id = 1;
            $statusProducto->save();
        }
    }
}
