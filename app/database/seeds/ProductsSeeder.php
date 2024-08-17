<?php
namespace App\Database\Seeds;

use App\Models\Product;
use App\Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        (new ProductFactory())->create(100)->save();
    }
}
