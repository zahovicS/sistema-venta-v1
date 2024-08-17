<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateProducts extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('products')) :
            static::$capsule::schema()->create('products', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('category_id');
                $table->unsignedBigInteger('brand_id');
                $table->string('image')->nullable();
                $table->string('code',13)->index()->unique();
                $table->string('description')->index();
                $table->timestamps();
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
                $table->foreign('brand_id')->references('id')->on('brands')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('products');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('products');
    }
}
