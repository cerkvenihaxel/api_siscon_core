<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Affiliate extends Model
{
    use HasFactory;
    use HasUlids;
    use SoftDeletes;
    protected $fillable = [
        'dni',
        'firstname',
        'lastname',
        'fullname',
        'gender',
        'birth',
        'country_id',
        'province_id',
        'address',
        'email',
        'phone',
    ];
}
