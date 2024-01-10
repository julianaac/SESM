<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEduSitCurrentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_sit_currents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('age_school')->nullable($value = true);
            $table->boolean('routine_assignment')->nullable($value = true);
            $table->string('matter_interest')->nullable($value = true);
            $table->string('matter_difficulty')->nullable($value = true);
            $table->boolean('difficulty_learning')->nullable($value = true);
            $table->mediumText('difficulty_learning_description')->nullable($value = true);
            $table->mediumText('interest_school')->nullable($value = true);
            $table->boolean('room_activities')->nullable($value = true);
            $table->boolean('development_expected')->nullable($value = true);
            $table->mediumText('development_expected_description')->nullable($value = true);
            $table->mediumText('interventions_initials')->nullable($value = true);
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
        Schema::dropIfExists('edu_sit_currents');
    }
}
