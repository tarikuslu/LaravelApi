<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headman extends Model
{
    use HasFactory;

    protected $fillable = [
        "muhtar_adsoyad",
        "muhtar_cep",
        "muhtar_evtel"
    ];


    public function neighbourhood() {
        return $this->hasOne(Neighbourhood::class);
    }
}
