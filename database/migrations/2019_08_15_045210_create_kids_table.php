<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100)->nullable();
            $table->string('sex', 15)->nullable();
            $table->date('birthday')->nullable();
            $table->string('mother_name', 100)->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('last_adress',200)->nullable();
            $table->string('nacionality',25)->nullable();
            $table->string('naturalness',25)->nullable();
            $table->string('ethnicity',25)->nullable();
            $table->string('religion',25)->nullable();
            $table->string('deficiency',100)->nullable();
            $table->string('deficiency_desc',100)->nullable();
            $table->string('special_necessity', 200)->nullable();
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
        Schema::dropIfExists('kids');
    }
}
