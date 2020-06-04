<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
	protected $primaryKey = 'cli_id';
	protected $fillable = ['cli_nombre','cli_cedula','cli_direccion','cli_telefono','cli_email'];

	
	public $timestamps = false;
	
}
