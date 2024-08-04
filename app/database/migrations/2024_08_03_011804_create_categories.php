<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateCategories extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('categories')) :
            static::$capsule::schema()->create('categories', function (Blueprint $table) {
                $table->id('id');
                $table->string('name')->index();
                $table->enum("status",["A","I"])->default("A")->index()->comment("A => ACTIVO, I => INACTIVO");
                $table->timestamps();
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('categories');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('categories');
    }
}
