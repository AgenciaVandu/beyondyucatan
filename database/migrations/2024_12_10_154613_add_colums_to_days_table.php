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
        Schema::table('days', function (Blueprint $table) {
            $table->string('title_en')->after('title')->nullable();
            $table->text('description_en')->after('description')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('days', function (Blueprint $table) {
            //
        });
    }
};