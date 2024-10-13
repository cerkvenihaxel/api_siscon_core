<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class AffiliateEmergencyContact extends Model
{
    use HasFactory;
    use HasUlids;

    protected $guarded = [];
}
