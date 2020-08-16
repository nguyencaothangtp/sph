<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['id', 'device_id', 'name', 'latitude', 'longitude'];

    public function latestAirTemps() {
        return $this->hasOne(AirTemp::class)->latest('actual_time');
    }

}
