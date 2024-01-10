<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEduSitPreviousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_sit_previous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('age_school')->nullable($value = true);
            $table->boolean('frequent_school')->nullable($value = true);
            $table->mediumText('justification')->nullable($value = true);
            $table->longText('life_school')->nullable($value = true);
            $table->string('school', 100)->nullable($value = true);
            $table->string('grade', 25)->nullable($value = true);
            $table->string('shift', 25)->nullable($value = true);
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
        Schema::dropIfExists('edu_sit_previous');
    }
}
