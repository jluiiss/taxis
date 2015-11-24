<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    protected $table = 'vehiculos';
    public $timestamps=false;

    protected $fillable=['Placas','Modelo','refChofer'];
    protected $hidden  =['Placas','Modelo','refChofer'];
}
