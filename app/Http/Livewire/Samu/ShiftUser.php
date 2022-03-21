<?php

namespace App\Http\Livewire\Samu;

use Livewire\Component;
use App\Models\User;
use App\Models\Samu\ShiftUser as ShiftUserModel;
use App\Models\Samu\JobType;

class ShiftUser extends Component
{
    public $users;
    public $shift;
    //public $shift_users;
    public $job_types;
    
    public $user_id;
    public $job_type_id;
    public $shift_id;

    protected $rules = [
        'user_id'       => 'required',
        'job_type_id'   => 'required',
    ];

    protected $messages = [
        'user_id.required'      => 'Debe selecionar un usuario',
        'job_type_id.required'  => 'Debe seleccionar una función',
    ];

    public function resetInputs()
    {
        $this->user_id = '';
        $this->job_type_id = '';
    }

    public function store()
    {
        $this->validate();

        $shift_user = ShiftUserModel::create([
            'user_id'       => $this->user_id,
            'job_type_id'   => $this->job_type_id,
            'shift_id'      => $this->shift->id
        ]);

        $this->shift->refresh();
        $this->resetInputs();
    }

    public function delete(ShiftUserModel $shiftUser)
    {
        $shiftUser->delete();
        $this->shift->refresh();
    }

    public function render()
    {
        $this->users = User::query()
            ->with('permissions')
            ->orderBy('text')
            ->permission(['SAMU operador', 'SAMU regulador', 'SAMU despachador'])
            ->dontHavePermission('SAMU auditor')
            ->pluck('id', 'text');

        $this->job_types    = JobType::where('tripulant', false)->orderBy('name')->get();
        return view('livewire.samu.shift-user');
    }
}
