<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RuangStudio extends Model
{
    protected $table = 'ruangstudio';
    protected $guarded = [];

     /**
     * Get the user that owns the Sewa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sewa(): BelongsTo
    {
        return $this->belongsTo(Sewa::class)->withDefault();
    }
}