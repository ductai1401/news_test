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
        Schema::create('olympics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('host_city');
            $table->string('logo');
            $table->year('year');
            $table->string('mascot');
            $table->string('torch');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olympics');
    }
};
