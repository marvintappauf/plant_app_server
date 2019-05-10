<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantAttribute extends Model
{
    protected $fillable = ['plantId', 'waterTemperature', 'temperature1', 'temperature2', 'ph', 'waterLevel', 'isFanOn', 'isLight1On', 'isLight2On', 'isWaterPumpOn', 'isDehumidifierOn', 'image1', 'image2', 'image3', 'image4'];

}