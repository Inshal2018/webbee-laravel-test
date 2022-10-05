<?php

namespace App\Models;


use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    function workshops(){
        return $this->hasMany(Workshop::class);
    }

    /*function future_workshops(){
        return $this->hasMany(Workshop::class)->where('start','>',date('Y-m-d H:M:S'));
    }*/
    function future_workshops(){
        return $this->hasMany(Workshop::class)->where('start','>',date('Y-m-d H:M:S'));
    }
}
