<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BookAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->bigInteger('client_id');
            $table->date('booking_date')->nullable();
            $table->time('booking_time')->nullable();
            $table->string('duration')->nullable();
            $table->string('recurring')->nullable();
            $table->date('reccur_until')->nullable();
            $table->string('reccur_frequency')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
