<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Nicolaslopezj\Searchable\SearchableTrait;

class Sewa extends Model
{
    // use SearchableTrait;
    protected $table = 'sewa';
    protected $guarded = [];
    // protected $searchable = [
        
    //     'columns' => [          
    //         'nama' => 10,
    //     ],
    // ];

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
        return $this->belongsTo(User::class);
    }
}

// public function ruangstudio(): BelongsTo
//     {
//         return $this->belongsTo(RuangStudio::class)->withDefault();
//     }
