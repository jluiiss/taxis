<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class tarifa extends Model
{
    protected $table = 'tarifa';
    public $timestamps=false;

    protected $fillable=['lugar','costo','tiempoAproximado'];
    protected $hidden  =['lugar','costo','tiempoAproximado'];
}
