<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Status extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
	        $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('model_has_status', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('status_id');
	        $table->morphs('model');
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_has_status');

        Schema::dropIfExists('status');
    }
}
