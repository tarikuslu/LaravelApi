<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicOpinion extends Model
{
    use HasFactory;
    protected $fillable = [
        "talep",
        "neighbourhood_id"
    ];

    public function neighbourhood() {
        return $this->belongsTo(Neighbourhood::class);
    }
}
