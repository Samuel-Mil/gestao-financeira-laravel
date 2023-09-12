<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Flow extends Model
{
    use HasFactory;

    protected $table = "cash_flow";

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
}
