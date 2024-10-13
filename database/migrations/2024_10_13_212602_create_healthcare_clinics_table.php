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
        Schema::create('healthcare_clinics', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->foreignUlid('healthcare_id')->constrained('healthcares');
            $table->foreignUlid('clinic_id')->constrained('clinics');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healthcare_clinics');
    }
};
