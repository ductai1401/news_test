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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('intro');
            $table->text('content');
            $table->string('image'); 
            $table->tinyInteger('status')->default(1)->comment('1: show - 0: hidden');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categories');
            $table->string('key_word');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
