<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['response', 'info_of', 'actual_time', 'actual_time', 'is_success'];

    public function psi()
    {
        return $this->hasMany('App\Psi');
    }
}
