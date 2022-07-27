<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bayar extends Model
{
    protected $table = 'bayar';
    protected $guarded = [];
    // protected $fillable = ['status'];

    /**
     * Get the user that owns the Bayar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sewa(): BelongsTo
    {
        return $this->belongsTo(Sewa::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function ruangstudio(): BelongsTo
    {
        return $this->belongsTo(RuangStudio::class);
    }
}
