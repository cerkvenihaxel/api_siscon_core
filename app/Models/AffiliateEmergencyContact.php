<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class AffiliateEmergencyContact extends Model
{
    use HasFactory;
    use HasUlids;

    protected $guarded = [];

    public function affiliates(): BelongsTo
    {
        return $this->belongsTo(Affiliate::class);
    }
}
