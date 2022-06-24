<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sewa extends Model
{
    protected $table = 'sewa';
    protected $guarded = [];

     /**
     * Get the user that owns the Sewa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ruangstudio(): BelongsTo
    {
        return $this->belongsTo(RuangStudio::class)->withDefault();
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}

// public function ruangstudio(): BelongsTo
//     {
//         return $this->belongsTo(RuangStudio::class)->withDefault();
//     }
