<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->references('id')->on('players');
            $table->foreignId('event_id')->references('id')->on('events');
            $table->integer('points_scored');
            $table->integer('assists');
            $table->integer('rebound');
            $table->longText('notes');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
