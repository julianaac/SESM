<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationBrothersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information_brothers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('this_service')->nullable($value = true);
            $table->boolean('other_service')->nullable($value = true);
            $table->string('bond_brothers')->nullable($value = true);
            $table->string('reason_separation')->nullable($value = true);
            $table->string('brother_adopted')->nullable($value = true);
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
        Schema::dropIfExists('information_brothers');
    }
}
