<?php 

namespace gpstax;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
   protected $table = 'users';
    public $timestamps=false;

    protected $fillable=['name','email','password'];

   public function setPasswordAttribute($valor){
   	if(!empty($valor)){
   	$this ->attributes['password']= \Hash::make($valor);
   	}
   }
/*
    protected $table='registro';
     public $timestamps=false;

 protected $fillable=['nombre','apellidos','edad','fecha','email','telefono','observaciones'];
 */


}
