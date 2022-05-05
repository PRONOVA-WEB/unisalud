<?php

namespace App\Models\MedicalProgrammer;

use App\Models\Iris\TcAppointment;
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

    public function tc_appointment()
    {
        return $this->hasMany(TcAppointment::class,'organization_local_code','code');
    }

    protected $table = 'mp_organization_local';
}
