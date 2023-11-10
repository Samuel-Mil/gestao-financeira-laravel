<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Flow extends Model
{
    use HasFactory;

    protected $table = "fluxo_caixa";

    protected $fillable = [
        'type',
        'amount',
        'entry_account',
        'outgoing_account'
    ];

    public function type(): HasOne
    {
        return $this->hasOne(FlowType::class);
    }

    public function outgoingAccount(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'outgoing_account');
    }

    public function entryAccount(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'entry_account');
    }
}
