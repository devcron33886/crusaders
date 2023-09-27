<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('team_id')->nullable()->references('id')->on('teams');
            $table->foreignId('category_id')->nullable()->references('id')->on('categories');
            $table->date('date_of_birth');
            $table->float('height');
            $table->float('weight');
            $table->string('position');
            $table->string('skills');
            $table->longText('injury_history')->nullable();
            $table->longText('medical_history');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
