<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Role extends Model
{
    use HasFactory;
    use HasUlids;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
    ];

    public function userRoles(): HasMany
    {
        return $this->hasMany(UserRole::class);
    }

    public function rolePrivileges(): HasMany
    {
        return $this->hasMany(RolePrivilege::class);
    }

}
