<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankStatus extends Model
{
    use HasFactory;

    protected $table = 'status_conta_bancaria';

    protected $fillable = [
        'status'
    ];

    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class);
    }
}
