<?php

use Leaf\Schema;
use Leaf\Database;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesPayments extends Database
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if (!static::$capsule::schema()->hasTable('invoices_payments')) :
            static::$capsule::schema()->create('invoices_payments', function (Blueprint $table) {
                $table->id('id');
                $table->unsignedBigInteger('invoice_id');
                $table->unsignedBigInteger('payment_method_id');
                $table->unsignedBigInteger('currency_id');
                $table->string('arn')->nullable();
                $table->float('total')->default(0);
                $table->float('total_paid')->default(0);
                $table->timestamps();
                $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('restrict');
                $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('restrict');
                $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('restrict');
            });
        endif;

        // you can now build your migrations with schemas.
        // see: https://leafphp.dev/docs/mvc/schema.html
        // Schema::build('invoices_payments');
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        static::$capsule::schema()->dropIfExists('invoices_payments');
    }
}
