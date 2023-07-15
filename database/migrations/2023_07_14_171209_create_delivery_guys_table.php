<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryGuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('delivery_guys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('uniqid');
            $table->string('phone_number');
            $table->string('ride_reg_no');
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
        Schema::dropIfExists('delivery_guys');
    }
}
