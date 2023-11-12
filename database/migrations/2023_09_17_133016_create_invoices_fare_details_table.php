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
        Schema::create('invoices_fare_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('invoice_id')->nullable()->index();
            $table->double('sub_total',16,2)->nullable()->index();
            $table->integer('discount')->nullable();
            $table->integer('tax')->nullable();
            $table->double('final_ammount',16,2)->nullable()->index();
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
        Schema::dropIfExists('invoices_fare_details');
    }
};
