<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankType extends Model
{
    use HasFactory;

    protected $table = 'bank_account_type';

    protected $fillable = [
        'type'
    ];

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }
}
