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
        Schema::create('olympic_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')->references('id')->on('countrys');
            $table->integer('athletes');
            $table->integer('teams');
            $table->integer('events');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olympic_games');
    }
};
