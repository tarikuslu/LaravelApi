<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerNote extends Model
{
    use HasFactory;
    protected $fillable = [
        "not",
        "neighbourhood_id"
    ];

    public function neighbourhood() {
        return $this->belongsTo(Neighbourhood::class);
    }
}
