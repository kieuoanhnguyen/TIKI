<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('shipper_id');
            $table->unsignedInteger('seller_id');
            $table->unsignedInteger('employee_id');
	        $table->float('total_money')->nullable();
	        $table->unsignedInteger('discount_id')->nullable();
	        $table->datetime('ship_date')->nullable();
	        $table->datetime('due_date')->nullable();
	        $table->datetime('order_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shipper_id')->references('id')->on('shippers');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('discount_id')->references('id')->on('discounts');
        });

        Schema::create('orders_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('telephone',10);
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('count');
            $table->float('price')->nullable();
	        $table->datetime('received_date');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('order_id')->references('id')->on('orders');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products');

        Schema::dropIfExists('orders');
    }
}

