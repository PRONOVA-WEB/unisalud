<?php

namespace App\Models\Iris;

use App\Models\MedicalProgrammer\OrganizationLocal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TcAppointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'episode',
        'identificator_patient',
        'identificator_specialist',
        'organization_local_code',
        'date',
        'duration',
        'type',
        'status',
    ];

    public function organization_local()
    {
        return $this->belongsTo(OrganizationLocal::class,'code','organization_local_code');
    }
}
