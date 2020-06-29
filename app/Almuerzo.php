<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almuerzo extends Model
{
    protected $table = 'almuerzo';
	protected $primaryKey = 'alm_id';
	protected $fillable = ['alm_sopa','alm_segundo','alm_segundo2','alm_jugo','alm_postre','alm_foto','alm_dia','alm_fecha'];

	
	public $timestamps = false;
}
