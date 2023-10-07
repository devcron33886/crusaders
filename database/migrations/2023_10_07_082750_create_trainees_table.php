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
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('father_phone');
            $table->string('mother_phone');
            $table->string('father_email');
            $table->string('mother_email');
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_relationship');
            $table->date('date_of_birth');
            $table->integer('height');
            $table->integer('weight');
            $table->string('school');
            $table->string('health_insurance');
            $table->longText('medical_history')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('amount_paid')->nullable();
            $table->string('status')->default('pending');
            $table->string('payment_status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainees');
    }
};
