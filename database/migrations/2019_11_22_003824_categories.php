<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('description')->nullable();
            $table->unsignedInteger('page_id')->nullable();
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('categories');
            $table->foreign('page_id')->references('id')->on('pages');
        });

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
	        $table->string('image');
	        $table->string('auther');
	        $table->string('publishing');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('seller_id');
            $table->float('price');
            $table->unsignedInteger('count');
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('seller_id')->references('id')->on('sellers');
        });

        Schema::create('products_warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('warehouse_id');
            $table->unsignedInteger('count');
	        $table->datetime('received_date');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('warehouse_id')->references('id')->on('warehouses');
        });
        
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->unsignedInteger('product_id');
	        $table->unsignedInteger('user_id');
	        $table->string('description')->nullable();
	        $table->unsignedInteger('rating');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_wirehouses');

        Schema::dropIfExists('reviews');

        Schema::dropIfExists('products');

        Schema::dropIfExists('categories');
    }
}
