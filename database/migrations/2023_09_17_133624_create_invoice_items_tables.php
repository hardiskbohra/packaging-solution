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
        Schema::create('invoice_items_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('invoice_id')->nullable()->index();
            $table->string('name')->nullable();
            $table->double('cost',16,2)->nullable();
            $table->integer('quantity')->nullable();
            $table->double('price',16,2)->nullable();
            $table->longtext('additional_info')->nullable();
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
        Schema::dropIfExists('invoice_items_tables');
    }
};
