<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyExtendedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_extendeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('interested_hosting')->nullable($value=true);
            $table->string('who_interested')->nullable($value = true);
            $table->string('conditions_care')->nullable($value = true);
            $table->string('opinion_kid')->nullable($value = true);
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
        Schema::dropIfExists('family_extendeds');
    }
}
