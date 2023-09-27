<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->string('recruiter');
            $table->foreignId('player_id')->references('id')->on('players');
            $table->date('recruitment_date');
            $table->longText('scouting_report')->nullable();
            $table->string('report_file');
            $table->string('recruitment_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
