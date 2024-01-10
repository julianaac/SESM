<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doctor')->nullable($value = true);
            $table->string('name')->nullable($value = true);
            $table->string('dosage')->nullable($value = true);
            $table->string('administration')->nullable($value = true);
            $table->string('period')->nullable($value = true);
            $table->bigInteger('data_health_id')->unsigned();
            $table->foreign('data_health_id')->references("id")->on('data_healths')->oneDelete('cascade');
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
        Schema::dropIfExists('medicines');
    }
}
