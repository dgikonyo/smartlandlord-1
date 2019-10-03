<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->bigIncrements('buildingId');
            $table->string('buildingName');
            $table->string('city');
            $table->integer('landTitleNumber');
            $table->integer('numberOfHouses');
            $table->unsignedBigInteger('caretakerId')->nullable();
            $table->date('openingDate');

            $table->foreign('caretakerId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
}
