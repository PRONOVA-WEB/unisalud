<?php

namespace App\Models\MedicalProgrammer;

use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Specialty extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'id_specialty','id_sigte', 'specialty_name', 'color'
        //, 'user_id'
    ];

    public function unscheduled_programmings()
    {
        return $this->hasMany('App\Models\MedicalProgrammer\UnscheduledProgramming');
    }

    public function calendarProgrammings()
    {
        return $this->hasMany('App\Models\MedicalProgrammer\CalendarProgramming');
    }

    public function userSpecialties()
    {
        return $this->hasMany('App\Models\MedicalProgrammer\UserSpecialty');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\MedicalProgrammer\User', 'mp_user_specialties')
            ->wherePivot('deleted_at', null);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function activities()
    {
        return $this->belongsToMany('App\Models\MedicalProgrammer\Activity', 'mp_specialty_activities')
                    ->wherePivot('deleted_at', null)
                    ->withPivot('performance');
    }

    public function operating_rooms()
    {
        return $this->belongsToMany('App\Models\MedicalProgrammer\OperatingRoom','mp_operating_room_specialties')
                    ->wherePivot('deleted_at', null);
                    // ->withPivot('performance');
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'location_specialty','specialty_id','location_id');
    }

    public function programming_proposals()
    {
        return $this->hasMany(ProgrammingProposal::class);
    }

    public function organization_local()
    {
        return $this->belongsToMany(OrganizationLocal::class,'mp_organization_local_specialty','specialty_id','organization_local_id');
    }

    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mp_specialties';
}
