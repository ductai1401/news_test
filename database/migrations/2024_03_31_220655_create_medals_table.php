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
        Schema::create('medals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')->references('id')->on('countrys');
            $table->unsignedBigInteger('id_olympic_sport');
            $table->foreign('id_olympic_sport')->references('id')->on('olympic_sports');
            $table->unsignedBigInteger('id_athlete');
            $table->tinyInteger('status')->default('1')->comment('1: show - 0: hidden');
            $table->foreign('id_athlete')->references('id')->on('athletes');
            $table->string('posision');
            $table->string('video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medals');
    }
};
