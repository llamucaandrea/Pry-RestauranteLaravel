<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Almuerzo;
use App\Session;
use Carbon\Carbon;

class AlmuerzoController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
		$numeroAlmuerzo = Almuerzo::All();
		$numeroAlmuerzo = $numeroAlmuerzo->last();
		$numeroAlmuerzo = $numeroAlmuerzo->alm_id;
		$fechaCompleta = Carbon::now();
		$fecha=explode(" ", $fechaCompleta);
		$almuerzo1 = Almuerzo::where('alm_id',$numeroAlmuerzo)->first();
		if($fecha[0]===$almuerzo1->alm_fecha)
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
			if ($dia==='DOMINGO' || $dia==='SABADO') {	
				$almuerzo1=null;			
			}else{
				$almuerzo1 = Almuerzo::where('alm_id',$numeroAlmuerzo)->first();		
			}	/*
			$numeroAlmuerzo2=$numeroAlmuerzo-1;
			$almuerzo2 = Almuerzo::where('alm_id',$numeroAlmuerzo2)->first();*/
			return view('almuerzo.index')
				->with('fecha', $fecha)
				->with('dia', $dia)
				->with('almuerzo1', $almuerzo1);
		}
		else
		{
			return view('almuerzo.index')
				->with('mensajes','El día no tiene asignados almuerzo por favor cree un almuerzo');
		}
		
	}
	public function create()
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
		return view('almuerzo.create', compact('dia'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if ($request->file('alm_foto')) {
    		$file = $request->file('alm_foto');
	    	$nombre_ima = 'almuerzo_' . time() . '.' . $file->getClientOriginalExtension();
	    	$path = public_path().'/almuerzos/';
	    	$file -> move($path, $nombre_ima);
    	}    	
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
		$dia = $MapaDia[$diaExacto];
		Almuerzo::create([
			'alm_sopa' => $request['alm_sopa'],
			'alm_segundo' => $request['alm_segundo'],
			'alm_segundo2' => $request['alm_segundo2'],
			'alm_jugo' => $request['alm_jugo'],
			'alm_postre' => $request['alm_postre'],
			'alm_foto' => $nombre_ima,
			'alm_dia' => $dia,
			'alm_fecha' => $fecha[0]
		]);	
		return redirect('almuerzo')
			->with('title','Almuerzo creado!')
			->with('subtitle','El registro de almuerzo se ha realizado con éxito');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$almuerzo = Almuerzo::find($id);
		return view('almuerzo.update', 
			['datos' => $almuerzo]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{	
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
		$dia = $MapaDia[$diaExacto];
		if ($request->file('alm_foto')===null) {
			$datosAlmuerzo = collect([
	       		'alm_sopa' => $request['alm_sopa'], 
	       		'alm_segundo' => $request['alm_segundo'], 
	       		'alm_segundo2' => $request['alm_segundo2'],
	       		'alm_jugo' => $request['alm_jugo'],
	       		'alm_postre' => $request['alm_postre'],
	       		'alm_foto' => $request['alm_foto1']       		
       		]); 			
		}elseif ($request->file('alm_foto')) {
    		$file = $request->file('alm_foto');
	    	$nombre_ima = 'almuerzo_' . time() . '.' . $file->getClientOriginalExtension();
	    	$path = public_path().'/almuerzos/';
	    	$file -> move($path, $nombre_ima);
	    	$datosAlmuerzo = collect([
	       		'alm_sopa' => $request['alm_sopa'], 
	       		'alm_segundo' => $request['alm_segundo'], 
	       		'alm_segundo2' => $request['alm_segundo2'],
	       		'alm_jugo' => $request['alm_jugo'],
	       		'alm_postre' => $request['alm_postre'],
	       		'alm_foto' => $nombre_ima     		
       		]); 
    	}    
    	$almuerzo = Almuerzo::find($request['alm_id']);
		$almuerzo->fill($datosAlmuerzo->all());
		$almuerzo->save();
		return redirect('almuerzo')
			->with('title','Almuerzo actualizado!')
			->with('subtitle','La modificación de almuerzo se ha realizado con éxito');
	}
	public function destroy($id)
	{
		Almuerzo::destroy($id);
		return redirect('almuerzo')
			->with('title', 'Almuerzo eliminado!')
			->with('subtitle', 'La eliminación del almuerzo se ha realizado con éxito.');
	}

}