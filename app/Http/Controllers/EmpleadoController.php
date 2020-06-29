<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experiencia;
use App\GradoEstudio;
use App\ReferenciaPersonal;
use App\Empleado;

class EmpleadoController extends Controller
{
    /** Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$empleado = Empleado::All();
		session(['I' => 0]);
		session(['REFERENCIAS' => null]);
		session(['EXPERENCIA' => null]);
		session(['ESTUDIO' => null]);
		session(['EMPLEADO' => null]);
		return view('empleado.index', compact('empleado'));
	}
	public function detalleEmpleado($id)
	{
		$empleado = Empleado::where('emp_id',$id)->first();
		return view('empleado.detalleEmpleado', compact('empleado'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('empleado.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function createEmpleado(Request $request)
	{
		if ($request->file('emp_foto')) {
    		$file = $request->file('emp_foto');
	    	$nombre_ima = 'empleado_' . time() . '.' . $file->getClientOriginalExtension();
	    	$path = public_path().'/empleados/';
	    	$file -> move($path, $nombre_ima);
    	}
		$empleado = array(
			'emp_nombre' => $request['emp_nombre'],
			'emp_cedula' => $request['emp_cedula'],
			'emp_direccion' => $request['emp_direccion'],
			'emp_telefono' => $request['emp_telefono'],
			'emp_email' => $request['emp_email'],
			'emp_area_trabajo' => $request['emp_area_trabajo'],
			'emp_comentario' => $request['emp_comentario'],
			'emp_foto' => $nombre_ima,
		);
		session(['EMPLEADO' => $empleado]);
		dd(session('EMPLEADO'));
		return view('empleado.createAcademico')
			->with('datos',$empleado);
	}

	public function getAcademico()
	{
		$empleado=session('EMPLEADO');
		dd($empleado);		
		return view('empleado.createAcademico')
			->with('datos',$empleado);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	 
	public function createAcademico(Request $request)
	{
		$i=session('I');
		$estudio=session('ESTUDIO');
		$empleado=session('EMPLEADO');
		dd($empleado);
		$estudio[$i] = array(
			'est_numero' => $i,
			'gra_est_instituto' => $request['gra_est_instituto'],
			'gra_est_año_estudio' => $request['gra_est_año_estudio'],
			'gra_est_estado' => $request['gra_est_estado'],
		);		
		session(['ESTUDIO' => $estudio]);
		session(['I' => $i]);
		return view('empleado.createAcademico')
			->with('estudio',$estudio)
			->with('datos',$empleado);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		  
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}
}
