<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    public function sewa(): BelongsTo
    {
        return $this->belongsTo(Sewa::class)->withDefault();
    }
}