<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table = 'experiencia';
	protected $primaryKey = 'exp_id';
	protected $fillable = ['exp_empresa','exp_tiempo','exp_motivo_salida','exp_estado_salida','emp_id'];
	
	public $timestamps = false;
}
