<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NeighbourhoodProject extends Model
{
    use HasFactory;
    protected $fillable = [
        "proje_adi",
        "proje_tipi",
        "yapim_yili",
        "masraf",
        "hedef_m2",
        "gercek_m2",
        "tamamlanma_yuzdesi",
        "proje_detayi",
        "proje_durumu",
    ];
    public function neighbourhood() {
        return $this->belongsTo(Neighbourhood::class);
    }
}
