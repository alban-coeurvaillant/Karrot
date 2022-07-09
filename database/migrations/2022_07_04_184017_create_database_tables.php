<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('place')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->boolean('online')->default(false);
            $table->nullableTimestamps();
        });

        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->nullableTimestamps();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('reservations');
        Schema::dropIfExists('events');
    }
};
