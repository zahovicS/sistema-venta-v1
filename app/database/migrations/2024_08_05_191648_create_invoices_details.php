<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesDetails extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('invoices_details')) :
            static::$capsule::schema()->create('invoices_details', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('invoice_id');
                $table->unsignedBigInteger('product_id');
                $table->float('quantity')->default(0);
                $table->float('subtotal')->default(0);
                $table->integer('rate_tax')->default(0);
                $table->float('total_tax')->default(0);
                $table->float('total_exonerated')->default(0);
                $table->float('total')->default(0);
                $table->timestamps();
                $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('restrict');
                $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('invoices_details');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('invoices_details');
    }
}
