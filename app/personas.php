<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    protected $table = 'personas';
    public $timestamps=false;

    protected $fillable=['Nombre','Apellidos','Edad','Telefono','refDireccion'];
    protected $hidden  =['Nombre','Apellidos','Edad','Telefono','refDireccion'];
}
