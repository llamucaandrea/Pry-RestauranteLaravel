<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Support\Facades\Session;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Authenticatable
{

	public function setAttribute($key, $value)
	{
		$isRememberTokenAttribute = $key == $this->getRememberTokenName();
		if (!$isRememberTokenAttribute)
		{
			parent::setAttribute($key, $value);
		}
	}
	protected $table = 'usuario';
	protected $primaryKey = 'usu_id';
	public $timestamps = false;
	protected $fillable = ['usu_id','usu_usuario', 'password','usu_rol','emp_id',];

	public function rols(){
		return $this->belongsToMany('App\Rol', 'usuario_rol', 'usu_id', 'rol_id');
	}
	public function empleado()
    {
        return $this->belongsTo('App\Empleado', 'emp_id');
    }

	public function setSession($roles, $emp)
	{
		if(count($roles) == 1)
		{
			Session::put(
				[
					'rol_id' => $roles[0]['rol_id'],
					'rol_nombre' => $roles[0]['rol_nombre'],
					'usuario' => $this->usu_usuario,
					'usu_id' => $this->usu_id,
					'empleado' => $emp['emp_nombre']
				]
			);
		}else
		{
			Session::put(
				[
					'rol_id' => $roles,
					'rol_nombre' => $roles[0]['rol_nombre'],
					'usuario' => $this->usu_usuario,
					'usu_id' => $this->usu_id,
					'empleado' => $emp['emp_nombre']
				]
			);
		}
	}

	protected $hidden = ['password','remember_token'];

	public function role(){
		return $this->belongsTo('App\Role','role_id');
	}
	public function empresa(){
		return $this->belongsTo('App\Empresa','EMP_CODIGO');
	}

	//valida que el rol pueda hacer la accion y retorna True o false
	public function authorizeAccion($item){
		if($this->role->accions->where('name',$item)->first()){
				return true;
		}
		return false;
	}
	//valida que el rol pueda hacer la accion y manda un error si no tiene
	public function authorizeRole($item){
		if($this->role->accions->where('name',$item)->first()){
				return true;
		}
		abort(401, 'Accion no autorizada');
	}
}
