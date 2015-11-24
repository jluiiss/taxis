<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    protected $table = 'registro';
    public $timestamps=false;

    protected $fillable=['horaSalida','horaLlegada','Destino','refPlaca','refTarifa'];
    protected $hidden  =['horaSalida','horaLlegada','Destino','refPlaca','refTarifa'];
}
