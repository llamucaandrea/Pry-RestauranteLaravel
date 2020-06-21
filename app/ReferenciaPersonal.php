<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReferenciaPersonal extends Model
{
    protected $table = 'referencia_personal';
	protected $primaryKey = 'ref_per_id';
	protected $fillable = ['ref_per_nombre','ref_per_telefono','ref_per_parentesco','emp_id'];
	
	public $timestamps = false;
}
