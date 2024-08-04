<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleUsers extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('role_users')) :
            static::$capsule::schema()->create('role_users', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('role_id');
                $table->unsignedBigInteger('user_id');
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('restrict');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('role_users');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('role_users');
    }
}
