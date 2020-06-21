<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoEstudio extends Model
{
    protected $table = 'grado_estudio';
	protected $primaryKey = 'gra_est_id';
	protected $fillable = ['gra_est_instituto','gra_est_año_estudio','gra_est_estado','emp_id'];
	
	public $timestamps = false;
}
