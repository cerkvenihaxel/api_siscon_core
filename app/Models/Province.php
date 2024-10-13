<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];

    public function countries(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
