<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->references('id')->on('players');
            $table->string('ocupation')->default('student');
            $table->string('mother');
            $table->string('father');
            $table->string('mother_mobile');
            $table->string('father_mobile');
            $table->string('resident_place');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
