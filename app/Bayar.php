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

    public function terbilang($x) {
        $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
      
        if ($x < 12)
          return " " . $angka[$x];
        elseif ($x < 20)
          return $this->terbilang($x - 10) . " belas";
        elseif ($x < 100)
          return $this->terbilang($x / 10) . " puluh" . $this->terbilang($x % 10);
        elseif ($x < 200)
          return "Seratus" . $this->terbilang($x - 100);
        elseif ($x < 1000)
          return $this->terbilang($x / 100) . " ratus" . $this->terbilang($x % 100);
        elseif ($x < 2000)
          return "Seribu" . $this->terbilang($x - 1000);
        elseif ($x < 1000000)
          return $this->terbilang($x / 1000) . " Ribu" . $this->terbilang($x % 1000);
        elseif ($x < 1000000000)
          return $this->terbilang($x / 1000000) . " juta" . $this->terbilang($x % 1000000);
    }
    public function getJumlahTerbilang(){
        return ucwords($this->terbilang($this->total_bayar)). 'Rupiah' ;
    }
}
