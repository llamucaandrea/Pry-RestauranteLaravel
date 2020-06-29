<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuFijo extends Model
{
    protected $table = 'platillo';
	protected $primaryKey = 'pla_id';
	protected $fillable = ['pla_nombre','pla_detalle','pla_dia_elaboracion','pla_hora_elaboracion'];

	
	public $timestamps = false;
}
