<?php

namespace App\Models\SurgicalSchedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgicalScheduleEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'observations',
        'surgical_schedule_id',
        'user_id'
    ];

    public function surgical_schedule() {
        return $this->belongsTo(SurgicalSchedule::class,'surgical_schedule_id');
    }
}
