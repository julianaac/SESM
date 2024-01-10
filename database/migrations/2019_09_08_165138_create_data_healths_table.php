<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_healths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('weight', 8, 2)->nullable($value = true);
            $table->double('height', 8, 2)->nullable($value = true);
            $table->boolean('use_medication')->nullable($value = true);
            $table->bigInteger('kid_id')->unsigned();
            $table->foreign('kid_id')->references("id")->on('kids')->oneDelete('cascade');
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
        Schema::dropIfExists('data_healths');
    }
}
