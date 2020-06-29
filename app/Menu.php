<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
	protected $primaryKey = 'men_id';
	protected $fillable = ['pla_id','alm_id','men_valor'];

	
	public $timestamps = false;
}
