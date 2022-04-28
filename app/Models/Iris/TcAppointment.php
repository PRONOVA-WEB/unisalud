<?php

namespace App\Models\Iris;

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
}
