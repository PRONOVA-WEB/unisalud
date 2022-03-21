<?php

namespace App\Models;

use App\Models\Some\Appointment;
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

    protected $table = 'locations';
}
