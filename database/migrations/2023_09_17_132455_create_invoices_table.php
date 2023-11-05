<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice_number')->nullable()->index();
            $table->integer('customer_id')->nullable()->index();
            $table->date('date')->nullable()->index();
            $table->date('delivery_date')->nullable()->index();

            $table->double('sub_total',16,2)->nullable()->index();

            $table->integer('discount_percentange')->nullable()->index();
            $table->integer('discount_ammount')->nullable()->index();
            $table->double('total_discount',16,2)->nullable()->index();

            $table->double('total',16,2)->nullable()->index();
            $table->double('paid_ammount',16,2)->nullable()->index();
            $table->double('remaining_ammount',16,2)->nullable()->index();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
