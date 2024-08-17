<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class StatusProductsStore extends Model
{
    protected $table = 'status_products_stores';

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'product_id', 'id');
    }

    public function store(): hasOne
    {
        return $this->hasOne(Store::class, 'store_id', 'id');
    }
}
