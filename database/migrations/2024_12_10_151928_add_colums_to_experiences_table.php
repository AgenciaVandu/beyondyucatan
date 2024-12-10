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
        Schema::table('experiences', function (Blueprint $table) {
            $table->string('titulo_en')->after('titulo')->nullable();
            $table->longText('lightdescription_en')->after('lightdescription')->nullable();;
            $table->longText('longdescription_en')->after('longdescription')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
            //
        });
    }
};