<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateClientes extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('clients')) :
            static::$capsule::schema()->create('clients', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('document_type_id');
                $table->string('document_number',11)->unique()->index();
                $table->string('name',150)->index();
                $table->string('email',150)->nullable()->index();
                $table->string('phone',15)->nullable()->index();
                $table->string('telephone',15)->nullable()->index();
                $table->string('address',150)->default('-')->index();
                $table->enum('status',['A','I'])->default('A')->index()->comment('A => ACTIVO, I => INACTIVO');
                $table->timestamps();
                $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('clients');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('clients');
    }
}
