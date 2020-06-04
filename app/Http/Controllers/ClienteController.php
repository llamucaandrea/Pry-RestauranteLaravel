<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = Cliente::All();
		return view('cliente.index', compact('clientes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cliente.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$fecha = Carbon::now();		
		//$valida=Cliente::where('cli_cedula',$request['cli_cedula'])->first();
		if(empty($valida)){
			Cliente::create([
				'cli_nombre' => $request['cli_nombre'],
				'cli_cedula' => $request['cli_cedula'],
				'cli_direccion' => $request['cli_direccion'],
				'cli_telefono' => $request['cli_telefono'],
				'cli_email' => $request['cli_email']
			]);
			return redirect('cliente')
				->with('title','Cliente creado!')
				->with('subtitle','El registro de cliente se ha realizado con éxito');
		}else{
            return view('cliente.create')            	
				->with('datos',$request)
            	->with('mensajes','El cliente ya existe!, NO SE DEBE REPETIR');
		}
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
		$cliente = Cliente::find($id);
		return view('cliente.update', 
			['datos' => $cliente]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$clienteV=Cliente::where('cli_cedula',$request['cli_cedula'])->get();
		$clienteValida=Cliente::where('cli_cedula',$request['cli_cedula'])->first();
		$cliente = Cliente::find($request['cli_id']); 
		if (count($clienteV) === 1){
			if ($clienteValida->cli_id === $cliente->cli_id){
			}else{
				return view('cliente.update', ['cliente' => $campus])            	
					->with('cliente',$request)
	            	->with('mensajes','El cliente ya existe!, NO SE DEBE REPETIR');
	        }
		}  
		$cliente->fill($request->all());
		$cliente->save();
		return redirect('cliente')
			->with('title','Cliente actualizado!')
			->with('subtitle','Se han actualizado correctamente los datos del cliente.');   
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$validaCliente = 0;
		//Orden::where('cli_id',$id)->first();
		
		if ($validaCliente === 1) {
			return redirect('cliente')
				->with('title', 'Cliente NO eliminado!')
				->with('subtitle', 'El cliente no se puede eliminar.');
		}
			Cliente::destroy($id);
			return redirect('cliente')
				->with('title', 'Cliente eliminado!')
				->with('subtitle', 'La eliminación del cliente se ha realizado con éxito.');
	}
}
