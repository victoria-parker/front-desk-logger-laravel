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
        Schema::create('wake_up_calls', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('created_by');
            $table->integer('room_number');
            $table->dateTime('wake_up_time');
            $table->boolean('resolved');
            $table->string('guest_name');
            $table->string('observations');
            $table->string('company');
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
        Schema::dropIfExists('wake_up_calls');
    }
};
