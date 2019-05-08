<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plant_attribute extends Model
{
    protected $fillable = ['datum', 'uhrzeit', 'temp', 'humidity', 'waterlevel', 'waterLevelStatus', 'plantId'];

}
