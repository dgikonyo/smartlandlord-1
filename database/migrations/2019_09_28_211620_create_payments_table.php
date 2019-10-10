<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoiceNumber',100)->unique();
            $table->integer('deposit')->nullable();
            $table->integer('damages')->nullable();
            $table->integer('penalty')->nullable();
            $table->integer('monthlyrent');
            $table->date('paymentDate');
           ;
            $table->integer('amountPaid')->nullable();
            $table->unsignedBigInteger('apartmentId');
            $table->unsignedBigInteger('tenantId');
            
            $table->foreign('apartmentId')
                    ->references('id')
                    ->on('apartments')
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
        Schema::dropIfExists('payments');
    }
}
