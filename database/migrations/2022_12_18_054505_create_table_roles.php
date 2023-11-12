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
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::statement("INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES 
        (NULL, 'Admin', 'Admin', UTC_TIMESTAMP(), UTC_TIMESTAMP()), 
        (NULL, 'Manager', 'Manager', UTC_TIMESTAMP(), UTC_TIMESTAMP()),
        (NULL, 'Staff', 'Staff', UTC_TIMESTAMP(), UTC_TIMESTAMP());");

    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
