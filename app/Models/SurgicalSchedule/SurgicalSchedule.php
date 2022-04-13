<?php

namespace App\Models\SurgicalSchedule;

use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgicalSchedule extends Model
{
    use HasFactory;

    protected $fillable=[
        'location_id',
        'date',
        'from',
        'to',
        'pacient_id',
        'observations',
        'surgery',
        'preoperative_diagnosis',
        'status'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'pacient_id');
    }

    public function surgical_schedule_team() {
        return $this->hasMany(SurgicalScheduleTeam::class,'surgical_schedule_id');
    }

    public function surgical_schedule_device() {
        return $this->hasMany(SurgicalScheduleDevice::class,'surgical_schedule_id');
    }

    public function events() {
        return $this->hasMany(SurgicalScheduleEvent::class,'surgical_schedule_id');
    }

    public function getEstatusAttribute()
    {
        switch ($this->status) {
            case 'agendado':
                $estatus = '<span class="badge badge-info p-2 text-lg">Agendado</span>';
                break;
            case 'en proceso':
                $estatus = '<span class="badge badge-warning p-2 text-lg">En proceso</span>';
                break;
            case 'finalizado':
                $estatus = '<span class="badge badge-success p-2 text-lg">Finalizado</span>';
                break;
            case 'cancelado':
                $estatus = '<span class="badge badge-danger p-2 text-lg">Cancelado</span>';
                break;
        }
        return $estatus;
    }

    protected $table = 'surgical_schedule';
}
