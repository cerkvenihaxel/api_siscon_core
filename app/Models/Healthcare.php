<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Healthcare extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'web',
        'province_id',
        'country_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function healthcareAffiliates(): HasMany
    {
        return $this->hasMany(HealthcareAffiliate::class);
    }

    public function healthcareClinics(): HasMany
    {
        return $this->hasMany(HealthcareClinic::class);
    }

    public function healthcareSuppliers(): HasMany
    {
        return $this->hasMany(HealthcareSupplier::class);
    }

    public function healthcareProfessionals(): HasMany
    {
        return $this->hasMany(HealthcareProfessional::class);
    }


}
