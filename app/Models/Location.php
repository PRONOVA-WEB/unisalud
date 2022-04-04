<?php

namespace App\Models;

use App\Models\MedicalProgrammer\Specialty;
use App\Models\SurgicalSchedule\LocationSchedule;
use App\Models\Some\Appointment;
use App\Models\SurgicalSchedule\SurgicalSchedule;
use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id', 'status', 'name', 'alias', 'description', 'organization_id','cod_con_physical_type_id'
    ];

    public function appointments()
    {
        return $this->morphToMany(Appointment::class, 'appointable');
    }

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization', 'organization_id');
    }

    public function hours_of_operation()
    {
        return $this->belongsToMany(HourOfOperation::class, 'location_hour_of_operation', 'location_id', 'hours_of_operation_id');
    }

    public function cod_con_physical_types()
    {
        return $this->belongsTo(CodConPhysicalType::class, 'cod_con_physical_type_id');
    }

    public function getEstatusAttribute()
    {
        switch ($this->status) {
            case 'active':
                $estatus = 'Activo';
                break;
            case 'suspended':
                $estatus = 'Suspendido';
                break;
            case 'inactive':
                $estatus = 'Inactivo';
                break;
        }
        return $estatus;
    }

    public function scopePavilion($query)
    {
        return $query->where('cod_con_physical_type_id',5);
    }

    public function scopeActive($query)
    {
        return $query->where('status','active');
    }

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 'location_specialty','location_id','specialty_id');
    }

    public function pavilion_schedule()
    {
        return $this->hasMany(LocationSchedule::class,'location_id')->where('status',1);
    }

    public function surgical_schedule()
    {
        return $this->hasMany(SurgicalSchedule::class,'location_id');
    }

    protected $table = 'locations';
}
