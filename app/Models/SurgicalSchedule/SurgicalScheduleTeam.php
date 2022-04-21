<?php

namespace App\Models\SurgicalSchedule;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SurgicalSchedule\SurgicalSchedule;
use App\Models\Practitioner;

class SurgicalScheduleTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'surgical_schedule_id',
        'practitioner_id',
        'type',
        'specialty_id'
    ];

    public function surgical_schedule() {
        return $this->belongsTo(SurgicalSchedule::class,'surgical_schedule_id');
    }

    public function practitioner() {
        return $this->belongsTo(Practitioner::class,'practitioner_id');
    }

    public function specialty() {
        return $this->belongsTo(Specialty::class,'specialty_id');
    }
    protected $table = 'surgical_schedule_team';
}
