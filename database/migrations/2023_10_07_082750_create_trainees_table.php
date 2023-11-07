<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->string('parent');
            $table->string('parent_phone');
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_relationship');
            $table->string('date_of_birth');
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('school')->nullable();
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
};
