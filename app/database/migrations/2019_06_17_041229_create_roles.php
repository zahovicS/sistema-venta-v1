<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateRoles extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('roles')) :
            static::$capsule::schema()->create('roles', function (Blueprint $table) {
                $table->id('id');
                $table->string('name')->unique()->index();
                $table->enum('status',['A','I'])->default('A')->index()->comment('A => ACTIVO, I => INACTIVO');
                $table->timestamps();
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('roles');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('roles');
    }
}
