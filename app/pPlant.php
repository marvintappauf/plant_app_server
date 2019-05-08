<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pPlant extends Model
{
    protected $fillable = ['name', 'type', 'temperatur', 'phase', 'ph', 'height'];
}
