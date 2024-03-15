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
        Schema::create('olympic_sports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_olympic');
            $table->foreign('id_olympic')->references('id')->on('olympics');
            $table->unsignedBigInteger('id_sport');
            $table->foreign('id_sport')->references('id')->on('sports');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olympic_sports');
    }
};
