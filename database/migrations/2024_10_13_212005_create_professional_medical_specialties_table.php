<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('professional_medical_specialties', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->foreignUlid('professional_id')->constrained('professionals')->cascadeOnDelete();
            $table->foreignUlid('medical_specialty_id')->constrained('medical_specialties')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_medical_specialties');
    }
};
