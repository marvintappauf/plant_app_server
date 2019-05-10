<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plant extends Model
{
    protected $fillable = ['plantSpecies', 'plantFamily', 'genus', 'description', 'rootLevel', 'maxGrowth', 'plantCompatibility', 'currentDate'];
}