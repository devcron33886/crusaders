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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('phone_code');
            $table->string('currency');
            $table->string('currency_symbol');
            $table->string('flag')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
