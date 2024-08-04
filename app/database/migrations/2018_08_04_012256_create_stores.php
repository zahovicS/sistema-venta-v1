<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateStores extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('stores')) :
            static::$capsule::schema()->create('stores', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('company_id');
                $table->string('name')->index();
                $table->string('address',200)->index();
                $table->string('logo',255)->default('logo/default.png');
                $table->string('email',20)->nullable()->index();
                $table->string('phone',20)->nullable()->index();
                $table->enum('status',['A','I'])->default('A')->index()->comment('A => ACTIVO, I => INACTIVO');
                $table->timestamps();
                $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('stores');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('stores');
    }
}
