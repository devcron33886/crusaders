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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->references('id')->on('players');
            $table->date('transfer_date');
            $table->string('transfer_type');
            $table->string('transfer_reason');
            $table->string('transfer_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
