<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoices extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('invoices')) :
            static::$capsule::schema()->create('invoices', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('store_id');
                $table->unsignedBigInteger('type_invoice_id');
                $table->unsignedBigInteger('client_id');
                $table->unsignedBigInteger('user_id');
                $table->float('subtotal')->default(0);
                $table->integer('rate_tax')->default(0);
                $table->float('total_tax')->default(0);
                $table->float('total_exonerated')->default(0);
                $table->float('total')->default(0);
                $table->float('total_paid')->default(0);
                $table->string('hash');
                $table->string('comment')->nullable();
                $table->string('printed_comment')->nullable();
                $table->enum('status',['A','I'])->default('A')->index()->comment('A => ACTIVO, I => INACTIVO');
                $table->timestamps();
                $table->foreign('store_id')->references('id')->on('stores')->onDelete('restrict');
                $table->foreign('type_invoice_id')->references('id')->on('type_invoices')->onDelete('restrict');
                $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('invoices');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('invoices');
    }
}
