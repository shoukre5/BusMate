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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->unsignedBigInteger('university_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->string('college');
            $table->string('subscription_status');
            $table->foreign('university_id')->references('university_id')->on('universities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
