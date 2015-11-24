<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class direcciones extends Model
{
    protected $table = 'direcciones';
    public $timestamps=false;

    protected $fillable=['NombreColonia','NombreCalle','NumeroCalle','Ciudad','Estado'];
    protected $hidden  =['NombreColonia','NombreCalle','NumeroCalle','Ciudad','Estado'];
}
