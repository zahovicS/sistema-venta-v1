<?php

namespace App\Services\Products;

use App\Enums\Products\ProductStatusEnum;
use App\Models\Product;

class ProductService
{

    /**
     * Retorna la cantidad de productos activos
     * @return int
     */
    public function total_products()
    {
        return Product::count();
    }
}
