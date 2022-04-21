<?php

namespace App\Http\Livewire\SurgicalSchedule;

use Livewire\Component;
use App\Models\Location;
use App\Models\MedicalProgrammer\Specialty;

class SelectEspPavilion extends Component
{
    public $specialties;
    public $pavilions;
    public $specialty_id;
    public $location_id;
    public $required_enabled;

    public function mount()
    {
        $this->pavilions   = [];
        $this->specialties = Specialty::orderBy('specialty_name', 'ASC')->get();
    }
    public function render()
    {
        if ($this->specialty_id != null) {

            $pavilions = Location::query();

            if($this->specialty_id > 0)
            {
                $pavilions = $pavilions->whereHas('specialties',function($q){
                    $q->where('specialty_id', $this->specialty_id);
                });
            }

            $pavilions = $pavilions->pavilion()
                            ->active()
                            ->get();

            $this->pavilions = $pavilions;
        }
        if(!empty($this->pavilions))
        {
            session()->flash('message', 'No se encontraron pabellones.');
        }
        return view('livewire.surgical-schedule.select-esp-pavilion');
    }
}
