<?php

namespace App\Models\MedicalProgrammer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationLocal extends Model
{
    use HasFactory;

    protected $fillable = ['code','description'];

    public function Specialty()
    {
        return $this->belongsToMany(Specialty::class,'mp_organization_local_specialty','organization_local_id','specialty_id');
    }

    protected $table = 'mp_organization_local';
}
