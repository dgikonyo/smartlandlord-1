<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('buildingId');
            $table->unsignedBigInteger('tenantId')->nullable();

            $table->foreign('buildingId')
                    ->references('buildingId')
                    ->on('buildings')
                    ->onDelete('cascade');
            $table->foreign('tenantId')
                    ->references('id')
                    ->on('tenants')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
