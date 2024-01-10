<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('document_admission')->nullable($value = true);
            $table->string('certificate_birth', 45)->nullable($value = true);
            $table->string('number_certificate', 45)->nullable($value = true);
            $table->string('card_vaccination', 45)->nullable($value = true);
            $table->string('historic_school', 45)->nullable($value = true);
            $table->boolean('studies_reports')->nullable($value = true);
            $table->string('studies_which')->nullable($value = true);
            $table->string('other_documents')->nullable($value = true);
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
        Schema::dropIfExists('documentations');
    }
}
