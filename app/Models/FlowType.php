<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FlowType extends Model
{
    use HasFactory;

    protected $table = 'tipo_fluxo';

    protected $fillable = [
        'type'
    ];

    public function flow(): BelongsTo
    {
        return $this->belongsTo(Flow::class);
    }
}
