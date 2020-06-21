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
