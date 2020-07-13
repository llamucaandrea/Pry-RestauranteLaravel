<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'usuario_rol';
	protected $primaryKey = 'usu_rol_id';
	public $timestamps = false;
	protected $fillable = ['usu_id','rol_id', 'usu_rol_estado'];
}
