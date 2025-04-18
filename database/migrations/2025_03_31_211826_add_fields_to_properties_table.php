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
        Schema::table('properties', function (Blueprint $table) {
            $table->string('rera_no')->nullable();
            $table->string('reference_no')->nullable();
            $table->string('property_type')->nullable();
            $table->enum('furnishing', ['Furnished', 'Unfurnished', 'Semi-Furnished'])->nullable();
            $table->integer('parking_lots')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn(['rera_no', 'reference_no', 'dld_permit_number', 'furnishing', 'parking_lots']);
        });
    }
};
