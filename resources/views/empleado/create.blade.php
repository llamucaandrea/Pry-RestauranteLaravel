@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'Crear Empleados'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
    <form action="{{url('/empleado/datosEmpleado')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="emp_nombre">Nombre <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos['emp_nombre']))
                        <input type="input" class="form-control" id="emp_nombre" name="emp_nombre" value="{{$datos['emp_nombre']}}" required>
                    @else  
                        <input type="input" class="form-control" id="emp_nombre" name="emp_nombre" placeholder="Nombre del empleado" required >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="emp_cedula">Cédula <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos['emp_cedula']))
                        <input type="number" class="form-control" id="emp_cedula" name="emp_cedula" value="{{$datos['emp_cedula']}}"  required>
                    @else  
                        <input type="number" class="form-control" id="emp_cedula" name="emp_cedula" placeholder="Cédula del empleado" required >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="emp_direccion">Dirección <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos['emp_direccion']))
                        <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" value="{{$datos['emp_direccion']}}" required>
                    @else  
                        <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" placeholder="Dirección del empleado" required>
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="emp_telefono">Teléfono <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos['emp_telefono']))
                        <input type="number" class="form-control" id="emp_telefono" name="emp_telefono" value="{{$datos['emp_telefono']}}" required>
                    @else  
                        <input type="number" class="form-control" id="emp_telefono" name="emp_telefono" placeholder="Teléfono del empleado" required>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"> 
                <div class="form-group">
                    <label for="emp_email">Email </label>
                    @if(isset($datos['emp_email']))
                        <input type="input" class="form-control" id="emp_email" name="emp_email" value="{{$datos['emp_email']}}" >
                    @else  
                        <input type="input" class="form-control" id="emp_email" name="emp_email" placeholder="Email del empleado" >
                    @endif
                </div>
            </div>
            <div class="col"> 
                <div class="form-group">
                    @if(isset($datos['emp_area_trabajo']))                     
                        <div class="col">
                            <div class="form-group">
                                <label for="emp_area_trabajo">Área de Trabajo<label style="color:#FF0000";>*</label></label>
                                <select type="input" class="form-control" id="emp_area_trabajo" name="emp_area_trabajo" required>
                                    <option>SELECCIONE</option>
                                    @if($datos['emp_area_trabajo']=='COCINERO')
                                        <option value="COCINERO" selected="{{$datos['emp_area_trabajo']}}">COCINERO</option>
                                    @else                                    
                                        <option value="COCINERO">COCINERO</option>
                                    @endif         
                                    @if($datos['emp_area_trabajo']=='MESERO')
                                        <option value="MESERO" selected="{{$datos['emp_area_trabajo']}}">MESERO</option>
                                    @else                                    
                                        <option value="MESERO">MESERO</option>
                                    @endif         
                                    @if($datos['emp_area_trabajo']=='CAJERO')
                                        <option value="CAJERO" selected="{{$datos['emp_area_trabajo']}}">CAJERO</option>
                                    @else                                    
                                        <option value="CAJERO">CAJERO</option>
                                    @endif                   
                                </select>
                            </div>
                        </div>
                    @else                          
                        <div class="col">
                            <div class="form-group">
                                <label for="emp_area_trabajo">Área de Trabajo<label style="color:#FF0000";>*</label></label>
                                <select type="input" class="form-control" id="emp_area_trabajo" name="emp_area_trabajo" required>
                                    <option>SELECCIONE</option>
                                    <option value="COCINERO">COCINERO</option>
                                    <option value="MESERO">MESERO</option>
                                    <option value="CAJERO">CAJERO</option>
                                </select>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="emp_comentario">Comentario</label>
                    @if(isset($datos['emp_comentario']))
                        <input type="input" class="form-control" id="emp_comentario" name="emp_comentario" value="{{$datos['emp_comentario']}}" >
                    @else  
                        <input type="input" class="form-control" id="emp_comentario" name="emp_comentario" placeholder="Comentario del empleado" >
                    @endif
                </div>
            </div>
        </div>        
        <div class="row">
            <div class="col">
                <a href="{{url('empleado')}}" class="btn btn-danger mb-2">Cancelar</a>
            </div>
            <div class="col" style="text-align: right;">
                <button type="submit" class="btn btn-success mb-2">Siguiente</button>
            </div>
        </div>
    </form>
</div>
@endsection