<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_hosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_input')->nullable($value = true);
            $table->string('hour_input')->nullable($value = true);
            $table->string('organ_forwarder')->nullable($value = true);
            $table->string('professional_receptor')->nullable($value = true);
            $table->string('professional_office')->nullable($value = true);
            $table->string('professional_delivery')->nullable($value = true);
            $table->string('reason_host')->nullable($value = true);
            $table->boolean('referral_judicial')->nullable($value = true);
            $table->string('time_after')->nullable($value = true);
            $table->string('number_guide')->nullable($value = true);
            $table->string('number_process')->nullable($value = true);
            $table->string('observation_kid')->nullable($value = true);
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
        Schema::dropIfExists('ticket_hosts');
    }
}
