<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class control extends Model
{
    protected $table = 'control';
    public $timestamps=false;

    protected $fillable=['Fecha','refRegistro'];
    protected $hidden  =['Fecha','refRegistro'];
}
