<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Nicolaslopezj\Searchable\SearchableTrait;

class RuangStudio extends Model
{
    use SearchableTrait;
    protected $table = 'ruangstudio';
    protected $guarded = [];
    protected $searchable = [        
        'columns' => [          
            'namaruangstudio' => 1,
        ],
    ];

     /**
     * Get the user that owns the Sewa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function sewa(): BelongsTo
    // {
    //     return $this->belongsTo(Sewa::class)->withDefault();
    // }

    /**
     * Get all of the sewa for the RuangStudio
     *
     * @return \Illuminate\DatabSewauent\Relations\HasMany
     */
    public function sewa(): HasMany
    {
        return $this->hasMany(Sewa::class);
    }
}