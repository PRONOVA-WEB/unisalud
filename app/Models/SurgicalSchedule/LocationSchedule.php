<?php

namespace App\Models\SurgicalSchedule;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationSchedule extends Model
{
    use HasFactory;
    protected $table = 'location_schedule';
    protected $fillable = [
        'location_id',
        'from',
        'to',
        'created_at',
        'updated_at'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }
}
