<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Employee extends Model
{
    use HasFactory;
    use HasUlids;
    use SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'document',
        'email',
        'phone',
        'healthcare_id',
    ];

    public function healthcare(): BelongsTo
    {
        return $this->belongsTo(Healthcare::class);
    }

    public function userEmployees(): HasMany
    {
        return $this->hasMany(UserEmployee::class);
    }
}
