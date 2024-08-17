<?php

namespace App\Models;

class Product extends Model
{
    protected $table = 'products';

    public function status_product_store(){
        return $this->hasMany(StatusProductsStore::class, 'id_product', 'id');
    }
}
