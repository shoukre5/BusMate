<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id('trip_id');
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('company_id');
            $table->string('destination');
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time');
            $table->integer('available_seats');
            $table->timestamps();

            $table->foreign('driver_id')->references('driver_id')->on('drivers');
            $table->foreign('company_id')->references('company_id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
