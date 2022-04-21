<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationSpecialty extends Model
{
    use HasFactory;

    public function location_specialty_schedule()
    {
        return $this->hasMany(LocationSpecialty::class,'location_specialty_id');
    }
}
