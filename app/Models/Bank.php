<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bank extends Model
{
    use HasFactory;

    protected $table = "bank_account";

    protected $fillable = [
        'number',
        'holder_name',
        'type',
        'opening_date',
        'agency',
        'agency_identification',
        'status',
        'info_contact',
        'notes'
    ];

    public function type(): HasOne
    {
        return $this->hasOne(BankType::class);
    }
    
    public function status(): HasOne
    {
        return $this->hasOne(BankStatus::class);
    }
}
