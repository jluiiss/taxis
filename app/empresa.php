<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table = 'empresa';
    public $timestamps=false;

    protected $fillable=['RFC','Nom_Empresa','Telefono','refchecador','refdireccion'];
    protected $hidden  =['RFC','Nom_Empresa','Telefono','refchecador','refdireccion'];
}
