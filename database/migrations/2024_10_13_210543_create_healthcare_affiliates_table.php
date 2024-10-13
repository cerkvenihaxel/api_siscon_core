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
        Schema::create('healthcare_affiliates', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->foreignUlid('healthcare_id')->constrained('healthcares');
            $table->foreignUlid('affiliate_id')->constrained('affiliates');
            $table->string('affiliate_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healthcare_affiliates');
    }
};
