<?php

namespace App\Services\Categories;

use App\Enums\Categories\CategoryStatusEnum;
use App\Models\Category;

class CategoryService
{
    /**
     * Retorna la cantidad de categorias activas
     * @return int
     */
    public function total_categories()
    {
        return Category::where('status', CategoryStatusEnum::ACTIVE)->count();
    }
}
