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
        Schema::create('experience_icon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('experience_id');
            $table->unsignedBigInteger('icon_id');
            $table->foreign('experience_id')->references('id')->on('experiences');
            $table->foreign('icon_id')->references('id')->on('icons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_icon');
    }
};
