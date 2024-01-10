<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('situation_family')->nullable($value = true);
            $table->string('situation_family_which')->nullable($value = true);
            $table->string('opinion_family')->nullable($value = true);
            $table->boolean('interest_family')->nullable($value = true);
            $table->string('motives_family')->nullable($value = true);
            $table->string('opinion_kid')->nullable($value = true);
            $table->boolean('interest_kid')->nullable($value = true);
            $table->string('motives_kid')->nullable($value = true);
            $table->boolean('restriction_contact')->nullable($value = true);
            $table->string('who_impediment')->nullable($value = true);
            $table->string('who_hindered')->nullable($value = true);
            $table->boolean('alcohol')->nullable($value = true);
            $table->string('alcohol_who')->nullable($value = true);
            $table->boolean('drugs')->nullable($value = true);
            $table->string('drugs_which')->nullable($value = true);
            $table->string('drugs_who')->nullable($value = true);
            $table->boolean('abuse')->nullable($value = true);
            $table->string('abuse_who')->nullable($value = true);
            $table->boolean('street')->nullable($value = true);
            $table->string('street_who')->nullable($value = true);
            $table->boolean('system_prison')->nullable($value = true);
            $table->string('system_prison_who')->nullable($value = true);
            $table->boolean('disorder_mental')->nullable($value = true);
            $table->string('disorder_mental_which')->nullable($value = true);
            $table->string('disorder_mental_who')->nullable($value = true);
            $table->boolean('disease_serious')->nullable($value = true);
            $table->string('disease_serious_which')->nullable($value = true);
            $table->string('disease_serious_who')->nullable($value = true);
            $table->boolean('rehabilitation')->nullable($value = true);
            $table->string('rehabilitation_who')->nullable($value = true);
            $table->boolean('threat_death')->nullable($value = true);
            $table->string('threat_death_who')->nullable($value = true);
            $table->boolean('none')->nullable($value = true);
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
        Schema::dropIfExists('information_families');
    }
}
