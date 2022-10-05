<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_state_operators', function (Blueprint $table) {
            $table->unsignedBigInteger('fare_state_id');
            $table->unsignedBigInteger('operator_id');

            $table->foreign('fare_state_id')->references('id')->on('fare_state');
            $table->foreign('operator_id')->references('id')->on('operators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fare_state_operators');
    }
};
