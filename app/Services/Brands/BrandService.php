<?php

namespace App\Services\Brands;

use App\Enums\Brands\BrandStatusEnum;
use App\Models\Brand;

class BrandService
{

    /**
     * Retorna la cantidad de marcas activos
     * @return int
     */
    public function total_brands()
    {
        return Brand::where('status', BrandStatusEnum::ACTIVE)->count();
    }
}
