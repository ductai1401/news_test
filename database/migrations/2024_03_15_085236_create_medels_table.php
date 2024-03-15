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
        Schema::create('medels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sport');
            $table->foreign('id_sport')->references('id')->on('sports');
            $table->unsignedBigInteger('id_olympic_sport');
            $table->foreign('id_olympic_sport')->references('id')->on('olympic_sports');
            $table->unsignedBigInteger('id_athlete');
            $table->foreign('id_athlete')->references('id')->on('athletes');
            $table->string('position');
            $table->string('video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medels');
    }
};
