<?php

namespace App\Http\Livewire\medical_programmer;

use Livewire\Component;

class AddHourOfOperation extends Component
{
    public $days;
    public $i = 0;
    public $inputs = [];
    public $showList;
    public $daysOfWeek;
    public $openingTime;
    public $closingTime;
    public $list = [];

    public function mount()
    {
        $this->days = [
            'mon'=>'Lunes',
            'tue'=>'Martes',
            'wed'=>'Miércoles',
            'thu'=>'Jueves',
            'fri'=>'Viernes',
            'sat'=>'Sábado',
            'sun'=>'Domingo',
            'MonToFri'=>'Lunes a Viernes',
            'allDays'=>'Toda la semana',
        ];
        $this->showList = 'd-none';
    }

    public function add()
    {
        $this->validate([
            'daysOfWeek'  => 'required',
            'openingTime' => 'required|date_format:H:i',
            'closingTime' => 'required|date_format:H:i|after:openingTime',
        ],[
            'daysOfWeek.required'  => 'Seleccione un día',
            'openingTime.required' => 'Seleccione una hora de inicio',
            'closingTime.required' => 'Seleccione una hora de término',
            'closingTime.after'    => 'La hora de término debe ser mayor a la de inicio',
        ]);
        $current  = [
            'daysOfWeek'  => $this->daysOfWeek,
            'openingTime' => $this->openingTime,
            'closingTime' => $this->closingTime,
        ];
        array_push($this->list, $current);
    }

    public function remove($i)
    {
        unset($this->list[$i]);

    }
    public function render()
    {
        $this->showList = (!empty($this->list)) ? '' : 'd-none';
        return view('livewire.medical_programmer.add-hour-of-operation', [
            'hours' => $this->list
        ]);
    }
}
