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
        Schema::create('barcode_university_staffs', function (Blueprint $table) {
            $table->id('staff_id');
            $table->unsignedBigInteger('university_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->string('barcode')->unique();
            $table->timestamps();

            $table->foreign('university_id')->references('university_id')->on('universities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barcode_university_staffs');
    }
};
