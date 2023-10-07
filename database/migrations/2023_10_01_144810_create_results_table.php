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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->references('id')->on('participants');
            $table->string('result_type');
            $table->float('result');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
