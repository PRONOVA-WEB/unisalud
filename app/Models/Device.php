<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $fillable = [
        'identifier',
        'status',
        'manufacturer',
        'serial_number',
        'device_name',
        'organization_id'
    ];

    public function scopeActive($query)
    {
        return $query->where('status','active');
    }

    public function getEstatusAttribute()
    {
        switch ($this->status) {
            case 'active':
                $estatus = 'Activo';
                break;
            case 'inactive':
                $estatus = 'Inactivo';
                break;
        }
        return $estatus;
    }

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization', 'organization_id');
    }
}
