<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Nicolaslopezj\Searchable\SearchableTrait;

class Sewa extends Model
{
    // use SearchableTrait;
    protected $table = 'sewa';
    protected $guarded = [];
    protected $dates = ['tgl_sewa'];
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

    /**
     * Get the user associated with the Sewa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bayar(): BelongsTo
    {
        return $this->belongsTo(Bayar::class)->withDefault();
    }

    public function getJumlahRupiah()
    {
        return number_format($this->jumlah, 0, ",",".");
    }
}

// public function ruangstudio(): BelongsTo
//     {
//         return $this->belongsTo(RuangStudio::class)->withDefault();
//     }
