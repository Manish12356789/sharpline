<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('frequency');
            $table->text('extra');
            $table->string('zip');
            $table->string('email');
            $table->string('date');
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('apt');
            $table->string('phone');
            $table->string('alt_phone')->nullable();
            $table->text('notes');
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
        Schema::dropIfExists('books');
    }
}
