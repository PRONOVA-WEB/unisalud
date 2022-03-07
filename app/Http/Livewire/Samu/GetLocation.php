<?php

namespace App\Http\Livewire\Samu;

use Livewire\Component;
use App\Models\Samu\Gps;
use App\Models\Samu\Mobile;

class GetLocation extends Component
{
    public $latitude;
    public $longitude;

    protected $listeners = ['storeLocation' => 'storeLocation'];

    public function storeLocation()
    {
        $mobile = Mobile::find(1);

        $gps = Gps::Create([
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'time' => now()
        ]);
        
        $gps->mobile()->associate($mobile);
        
        $gps->save();
    }

    public function render()
    {
        //return view('livewire.web.search-near-by')->extends('layouts.web-layout')->section('content');
        return view('livewire.samu.get-location');
    }
}
