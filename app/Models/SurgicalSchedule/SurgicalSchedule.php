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
        'surgery'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'pacient_id');
    }

    public function surgical_schedule() {
        return $this->hasMany(SurgicalScheduleTeam::class,'surgical_schedule_id');
    }

    protected $table = 'surgical_schedule';
}
