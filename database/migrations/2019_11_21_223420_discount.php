<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Discount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('discount');
            $table->dateTime('started_date');
            $table->datetime('end_date')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('users_discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
	        $table->unsignedInteger('discount_id');
	        $table->string('description');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('discount_id')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_discounts');
        
        Schema::dropIfExists('discounts');
    }
}
