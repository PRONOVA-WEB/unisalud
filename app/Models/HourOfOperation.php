<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HourOfOperation extends Model
{
    protected $table = 'hours_of_operation';
    protected $fillable = ['daysOfWeek','openingTime','closingTime'];

    public function getSpanishDayAttribute()
    {
        switch ($this->daysOfWeek) {
            case 'mon':
                $day = 'Lunes';
                break;
            case 'tue':
                $day = 'Martes';
                break;
            case 'wed':
                $day = 'Miércoles';
                break;
            case 'thu':
                $day = 'Juéves';
                break;
            case 'fri':
                $day = 'Viernes';
                break;
            case 'sat':
                $day = 'Sábado';
                break;
            case 'sun':
                $day = 'Domingo';
                break;
            // case 'MonToFri':
            //     $day = 'Lunes a Viernes';
            //     break;
            // case 'allDays':
            //     $day = 'Toda la semana';
            //     break;
        }
        return $day;
    }
}
