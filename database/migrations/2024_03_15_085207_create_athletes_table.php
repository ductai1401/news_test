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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->date('brith_day');
            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')->references('id')->on('countrys');
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
        Schema::dropIfExists('athletes');
    }
};
