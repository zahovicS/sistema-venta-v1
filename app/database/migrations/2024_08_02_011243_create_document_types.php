<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentTypes extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('document_types')) :
            static::$capsule::schema()->create('document_types', function (Blueprint $table) {
                $table->id('id');
                $table->string('name', 50)->unique()->index();
                $table->integer('min_length')->default(8);
                $table->enum('status', ['A', 'I'])->default('A')->index()->comment('A => ACTIVO, I => INACTIVO');
                $table->timestamps();
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('document_types');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('document_types');
    }
}
