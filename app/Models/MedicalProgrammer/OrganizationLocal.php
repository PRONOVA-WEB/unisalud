<?php

namespace App\Models\MedicalProgrammer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationLocal extends Model
{
    use HasFactory;

    public function Specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
