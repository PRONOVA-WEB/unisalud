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

    protected $table = 'surgical_schedule';
}
