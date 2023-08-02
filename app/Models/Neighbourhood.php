<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighbourhood extends Model
{
    use HasFactory;
    protected $fillable = [
        "mahalle_adi",
        "ilceye_uzaklik",
        "yuzolcumu",
        "imar_durumu",
        "hane_sayisi",
        "esnaf_sayisi",
        "kadin_sayisi",
        "erkek_sayisi",
        "cop_kutusu_sayisi",
        "okul_sayisi",
        "ogrenci_sayisi",
        "cami_sayisi",
        "saglik_ocagi",
        "park_sayisi",
        "koy_konagi",
        "yesilkartli_sayisi",
        "belediye_yardimi_alan_sayisi",
        "akp2023mv_oysayisi",
        "mhp2023mv_oysayisi",
        "iyi2023mv_oysayisi",
        "chp2023mv_oysayisi",
        "hdp2023mv_oysayisi",
        "cumhur2023oy_sayisi",
        "millet2023oy_sayisi",
        "yerel2019mhp_oy_sayisi",
        "yerel2019iyi_oy_sayisi"
    ];

    public function headman() {
        return $this->hasOne(Headman::class);
    }

    public function neighbourhood_projects() {
        return $this->hasMany(NeighbourhoodProject::class);
    }

    public function public_opinions() {
        return $this->hasMany(PublicOpinion::class);
    }

    public function manager_notes() {
        return $this->hasMany(ManagerNote::class);
    }
}
