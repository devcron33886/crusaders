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
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number')->unique();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('competition_id')->constrained();
            $table->foreignId('sport_id')->constrained();
            $table->string('status');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->string('payment_reference');
            $table->string('payment_amount');
            $table->string('payment_date');
            $table->string('payment_time');
            $table->string('payment_currency');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
