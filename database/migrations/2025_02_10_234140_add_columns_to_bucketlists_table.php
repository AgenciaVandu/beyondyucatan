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
        Schema::table('bucketlists', function (Blueprint $table) {
            $table->string('slug_es')->nullable();
            $table->string('slug_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bucketlists', function (Blueprint $table) {
            //
        });
    }
};
