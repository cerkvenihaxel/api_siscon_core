<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Professional extends Model
{
    use HasFactory;
    use HasUlids;
    use SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'medical_registration_number',
        'document',
        'email',
        'phone',
        'country_id',
        'province_id',
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function professionalMedicalSpecialties(): HasMany
    {
        return $this->hasMany(ProfessionalMedicalSpecialty::class);
    }

    public function healthcareProfessional(): HasMany
    {
        return $this->hasMany(HealthcareProfessional::class);
    }

    public function userProfessional(): HasOne
    {
        return $this->hasOne(UserProfessional::class);
    }

}
