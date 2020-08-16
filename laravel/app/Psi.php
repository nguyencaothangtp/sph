<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psi extends Model
{
    protected $table = 'psi';

    protected $fillable = ['index', 'value', 'log_id'];
}
