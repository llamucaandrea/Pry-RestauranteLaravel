@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'Crear Clientes'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
    <form action="{{url('/cliente/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cli_nombre">Nombre <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->cli_nombre))
                        <input type="input" class="form-control" id="cli_nombre" name="cli_nombre" value="{{$datos->cli_nombre}}" required>
                    @else  
                        <input type="input" class="form-control" id="cli_nombre" name="cli_nombre" placeholder="Nombre del cliente" required >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cli_cedula">Cédula <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->cli_cedula))
                        <input type="number" class="form-control" id="cli_cedula" name="cli_cedula" value="{{$datos->cli_cedula}}"  required>
                    @else  
                        <input type="number" class="form-control" id="cli_cedula" name="cli_cedula" placeholder="Cédula del cliente" required >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="cli_direccion">Dirección</label>
                    @if(isset($datos->cli_direccion))
                        <input type="input" class="form-control" id="cli_direccion" name="cli_direccion" value="{{$datos->cli_direccion}}" >
                    @else  
                        <input type="input" class="form-control" id="cli_direccion" name="cli_direccion" placeholder="Dirección del cliente" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cli_telefono">Teléfono </label>
                    @if(isset($datos->cli_telefono))
                        <input type="number" class="form-control" id="cli_telefono" name="cli_telefono" value="{{$datos->cli_telefono}}" required>
                    @else  
                        <input type="number" class="form-control" id="cli_telefono" name="cli_telefono" placeholder="Teléfono del cliente" required>
                    @endif
                </div>
            </div>
            <div class="col"> 
                <div class="form-group">
                    <label for="cli_email">Email </label>
                    @if(isset($datos->cli_email))
                        <input type="input" class="form-control" id="cli_email" name="cli_email" value="{{$datos->cli_email}}" required>
                    @else  
                        <input type="input" class="form-control" id="cli_email" name="cli_email" placeholder="Email del cliente" required>
                    @endif
                </div>
            </div>
        </div>
        <div>
            <label></label>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('cliente')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection