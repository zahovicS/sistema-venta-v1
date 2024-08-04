<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreatePricesProducts extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('prices_products')) :
            static::$capsule::schema()->create('prices_products', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('store_id');
                $table->unsignedBigInteger('product_id');
                $table->float('price_in')->default(0);
                $table->float('price_out')->default(0);
                $table->timestamps();
                $table->foreign('store_id')->references('id')->on('stores')->onDelete('restrict');
                $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('prices_products');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('prices_products');
    }
}
