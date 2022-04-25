<?php

namespace App\Models\SurgicalSchedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgicalScheduleDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'surgical_schedule_id',
        'device_id',
    ];

    public function surgical_schedule() {
        return $this->belongsTo(SurgicalSchedule::class,'surgical_schedule_id');
    }

    public function device() {
        return $this->belongsTo(Device::class,'device_id');
    }
}
