<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('bedroom')->default('1');
            $table->string('bathroom')->default('1');
            $table->string('frequency')->default('eowk');
            $table->string('extra');
            $table->string('zip');
            $table->string('email');
            $table->string('date');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table ->string('apt');
            $table->string('phone');
            $table->string('alt_number');
            $table->string('note');
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
        Schema::dropIfExists('orders');
    }
}
