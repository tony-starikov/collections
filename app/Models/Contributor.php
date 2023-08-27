<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function collection(): BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }
}
