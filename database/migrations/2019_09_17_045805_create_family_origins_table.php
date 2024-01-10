<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyOriginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_origins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mother_name')->nullable($value = true);
            $table->string('mother_age')->nullable($value = true);
            $table->string('mother_address')->nullable($value = true);
            $table->string('mother_phone')->nullable($value = true);
            $table->string('mother_cpf')->nullable($value = true);
            $table->string('mother_rg')->nullable($value = true);
            $table->string('mother_occupation')->nullable($value = true);
            $table->string('mother_situation')->nullable($value = true);
            $table->string('dad_name')->nullable($value = true);
            $table->string('dad_age')->nullable($value = true);
            $table->string('dad_address')->nullable($value = true);
            $table->string('dad_phone')->nullable($value = true);
            $table->string('dad_cpf')->nullable($value = true);
            $table->string('dad_rg')->nullable($value = true);
            $table->string('dad_occupation')->nullable($value = true);
            $table->string('dad_situation')->nullable($value = true);
            $table->string('responsible_name')->nullable($value = true);
            $table->string('responsible_age')->nullable($value = true);
            $table->string('responsible_address')->nullable($value = true);
            $table->string('responsible_phone')->nullable($value = true);
            $table->string('responsible_cpf')->nullable($value = true);
            $table->string('responsible_rg')->nullable($value = true);
            $table->string('responsible_occupation')->nullable($value = true);
            $table->string('responsible_bond')->nullable($value = true);
            $table->string('conditions')->nullable($value = true);
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
        Schema::dropIfExists('family_origins');
    }
}
