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
        Schema::create('affiliates', function (Blueprint $table): void {
            $table->ulid('id')->primary();
            $table->string('dni')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fullname');
            $table->string('gender');
            $table->string('address');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('birth');

            $table->foreignUlid('country_id')->nullable()->constrained('countries');
            $table->foreignUlid('province_id')->nullable()->constrained('provinces');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliates');
    }
};
