<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
	protected $primaryKey = 'emp_id';
	protected $fillable = ['emp_nombre','emp_cedula','emp_direccion','emp_telefono','emp_email','emp_grado_estudios','emp_experiencia','emp_area_trabajo','emp_comentario','emp_foto','ref_per_id'];

	
	public $timestamps = false;
}
