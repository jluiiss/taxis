<?php

namespace gpstax;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    
    protected $table = 'usuarios';
    public $timestamps=false;

    protected $fillable=['usuario','password'];
    protected $hidden  =['usuario','password'];
}
