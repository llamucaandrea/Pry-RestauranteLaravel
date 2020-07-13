<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {
	protected $table = 'rol';
	protected $primaryKey = 'rol_id';
	protected $fillable = ['rol_nombre'];
	public $timestamps = false;
	
	public function usuarios(){
		return $this->belongsToMany('App\Usuario', 'usuario_rol'); 
	}

	
}
