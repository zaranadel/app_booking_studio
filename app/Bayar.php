<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bayar extends Model
{
    protected $table = 'bayar';
    protected $guarded = [];
    protected $dates = ['tgl_bayar'];

    /**
     * Get the user that owns the Bayar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sewa(): BelongsTo
    {
        return $this->belongsTo(Sewa::class);
    }
}
