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
        Schema::create('subscriptions', function (Blueprint $table) {
                $table->id('subscription_request_id');
                $table->unsignedBigInteger('student_id');
                $table->unsignedBigInteger('company_id');
                $table->string('status');
                $table->foreign('student_id')->references('student_id')->on('students');
                $table->foreign('company_id')->references('company_id')->on('companies');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
