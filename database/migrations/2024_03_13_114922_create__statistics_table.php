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
        Schema::create('_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_country');
            $table->foreign('id_country')->references('id')->on('countrys');
            $table->string('gold_medals');
            $table->string('silver_medals');
            $table->string('bronze_medals');
            $table->string('total_medals');
            $table->string('records');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_statistics');
    }
};
