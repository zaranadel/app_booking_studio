<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $guarded = [];

    //  /**
    //  * Get the user that owns the Sewa
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function sewa(): BelongsTo
    // {
    //     return $this->belongsTo(Sewa::class)->withDefault();
    // }
}