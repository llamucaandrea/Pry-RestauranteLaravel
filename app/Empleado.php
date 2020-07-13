<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
	protected $primaryKey = 'emp_id';
	protected $fillable = ['emp_nombre','emp_cedula','emp_direccion','emp_telefono','emp_email','emp_area_trabajo','emp_comentario','emp_foto'];
	
	public $timestamps = false;


    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usu_id');
    }

}
