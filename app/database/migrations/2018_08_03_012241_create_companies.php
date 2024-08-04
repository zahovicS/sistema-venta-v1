<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanies extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('companies')) :
            static::$capsule::schema()->create('companies', function (Blueprint $table) {
                $table->id('id');
                $table->string('company_document',11)->unique()->index();
                $table->string('company_name',150)->index();
                $table->string('address',200)->index();
                $table->string('logo',255)->default('logo/default.png');
                $table->string('email',20)->nullable()->index();
                $table->string('phone',20)->nullable()->index();
                $table->timestamps();
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('companies');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('companies');
    }
}
