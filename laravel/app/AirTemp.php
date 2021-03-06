<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirTemp extends Model
{
    public $timestamps = false;

    protected $fillable = ['station_id', 'actual_time', 'value', 'log_id'];

}
