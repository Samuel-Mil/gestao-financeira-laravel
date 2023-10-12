<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'users_roles';

    protected $fillable = [
        'role'
    ];

    public function bank(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
