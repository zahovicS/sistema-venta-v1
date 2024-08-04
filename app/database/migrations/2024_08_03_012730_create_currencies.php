<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateCurrencies extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('currencies')) :
            static::$capsule::schema()->create('currencies', function (Blueprint $table) {
                $table->id('id');
                $table->string('name')->index();
                $table->string('code')->unique()->index();
                $table->string('symbol');
                $table->enum('status',['A','I'])->default('A')->index()->comment('A => ACTIVO, I => INACTIVO');
                $table->timestamps();
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('currencies');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('currencies');
    }
}
