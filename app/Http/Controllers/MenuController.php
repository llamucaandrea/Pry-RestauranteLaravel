<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Almuerzo;
use App\Session;
use Carbon\Carbon;

class menuController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$menu = Menu::All();
		$numeroAlmuerzo = Almuerzo::All();
		$numeroAlmuerzo = $numeroAlmuerzo->last();
		$numeroAlmuerzo = $numeroAlmuerzo->alm_id;
		$fechaCompleta = Carbon::now();
		$fecha=explode(" ", $fechaCompleta);
		$diaExacto = Carbon::now()->dayOfWeek;
		$MapaDia = [
		    0 => 'DOMINGO',
		    1 => 'LUNES',
		    2 => 'MARTES',
		    3 => 'MIERCOLES',
		    4 => 'JUEVES',
		    5 => 'VIERNES',
		    6 => 'SABADO',
		];	
		//$dia = $MapaDia[$diaExacto];
		$dia = 'VIERNES';				
		if ($dia==='DOMINGO' || $dia==='SABADO') {	
			$almuerzo1=null;		
			$almuerzo2=null;		
		}elseif ($dia==='VIERNES') {
			$almuerzo1 = Almuerzo::where('alm_id',$numeroAlmuerzo)->first();
		}else{
			$almuerzo1 = Almuerzo::where('alm_id',$numeroAlmuerzo)->first();
			$numeroAlmuerzo = $numeroAlmuerzo-1;
			$almuerzo2 = Almuerzo::where('alm_id',$numeroAlmuerzo)->first();		
		}	/*
		$numeroAlmuerzo2=$numeroAlmuerzo-1;
		$almuerzo2 = Almuerzo::where('alm_id',$numeroAlmuerzo2)->first();*/
		return view('menu.index')
			->with('menu', $menu)
			->with('fecha', $fecha)
			->with('dia', $dia)
			->with('almuerzo1', $almuerzo1);
	}
	public function createAlmuerzo()
	{
		$diaExacto = Carbon::now()->dayOfWeek;
		$MapaDia = [
		    0 => 'DOMINGO',
		    1 => 'LUNES',
		    2 => 'MARTES',
		    3 => 'MIERCOLES',
		    4 => 'JUEVES',
		    5 => 'VIERNES',
		    6 => 'SABADO',
		];	
		$dia = $MapaDia[$diaExacto];		
		return view('menu.createAlmuerzo', compact('dia'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function storeAlmuerzo(Request $request)
	{
		if ($request->file('alm_foto')) {
    		$file = $request->file('alm_foto');
	    	$nombre_ima = 'almuerzo_' . time() . '.' . $file->getClientOriginalExtension();
	    	$path = public_path().'/almuerzos/';
	    	$file -> move($path, $nombre_ima);
    	}
		$diaExacto = Carbon::now()->dayOfWeek;
		$MapaDia = [
		    0 => 'DOMINGO',
		    1 => 'LUNES',
		    2 => 'MARTES',
		    3 => 'MIERCOLES',
		    4 => 'JUEVES',
		    5 => 'VIERNES',
		    6 => 'SABADO',
		];		
		$dia = $MapaDia[$diaExacto];
		Almuerzo::create([
			'alm_sopa' => $request['alm_sopa'],
			'alm_segundo' => $request['alm_segundo'],
			'alm_segundo2' => $request['alm_segundo2'],
			'alm_jugo' => $request['alm_jugo'],
			'alm_postre' => $request['alm_postre'],
			'alm_foto' => $nombre_ima,
			'alm_dia' => $dia
		]);	
		return redirect('menu')
			->with('title','Almuerzo creado!')
			->with('subtitle','El registro de almuerzo se ha realizado con éxito');
	}

}
