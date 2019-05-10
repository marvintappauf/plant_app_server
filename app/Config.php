<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';
    protected $fillable = ['socket1', 'socket2', 'socket3', 'socket4', 'socket5', 'socket6'];

}
