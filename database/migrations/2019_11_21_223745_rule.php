<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accept')->unique();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('model_has_rule', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rule_id');
            $table->morphs('model');
            $table->timestamps();

            $table->foreign('rule_id')->references('id')->on('rules');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_has_rule');

        Schema::dropIfExists('rules');
    }
}
