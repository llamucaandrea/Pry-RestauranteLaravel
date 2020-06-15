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
    <!--form action="{{url('/empleado/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"-->
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cli_nombre">Nombre <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->emp_nombre))
                        <input type="input" class="form-control" id="emp_nombre" name="emp_nombre" value="{{$datos->emp_nombre}}" required>
                    @else  
                        <input type="input" class="form-control" id="emp_nombre" name="emp_nombre" placeholder="Nombre del empleado" required >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="emp_cedula">Cédula <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->emp_cedula))
                        <input type="number" class="form-control" id="emp_cedula" name="emp_cedula" value="{{$datos->emp_cedula}}"  required>
                    @else  
                        <input type="number" class="form-control" id="emp_cedula" name="emp_cedula" placeholder="Cédula del empleado" required >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="emp_direccion">Dirección</label>
                    @if(isset($datos->emp_direccion))
                        <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" value="{{$datos->emp_direccion}}" >
                    @else  
                        <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" placeholder="Dirección del empleado" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="emp_telefono">Teléfono <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->emp_telefono))
                        <input type="number" class="form-control" id="emp_telefono" name="emp_telefono" value="{{$datos->emp_telefono}}" required>
                    @else  
                        <input type="number" class="form-control" id="emp_telefono" name="emp_telefono" placeholder="Teléfono del empleado" required>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col"> 
                <div class="form-group">
                    <label for="emp_email">Email <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->emp_email))
                        <input type="input" class="form-control" id="emp_email" name="emp_email" value="{{$datos->emp_email}}" required>
                    @else  
                        <input type="input" class="form-control" id="emp_email" name="emp_email" placeholder="Email del empleado" required>
                    @endif
                </div>
            </div>
            <div class="col"> 
                <div class="form-group">
                    <label for="emp_email">Grado de estudios <label style="color:#FF0000";>*</label></label>
                    <select type="input" class="form-control" id="emp_grado_estudios" name="emp_grado_estudios" placeholder="GRADO DE ESTUDIOS" required>
                        <option>SELECCIONE</option>
                        @if(isset($datos->emp_grado_estudios))
                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">NINGUNO</option>
                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">PRIMARIA</option>
                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">BACHILLERATO</option>
                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">TERCER NIVEL</option>
                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">CUARTO NIVEL</option>
                        @else  
                            <option value="$emp_grado_estudios">NINGUNO</option>
                            <option value="$emp_grado_estudios">PRIMARIA</option>
                            <option value="$emp_grado_estudios">BACHILLERATO</option>
                            <option value="$emp_grado_estudios">TERCER NIVEL</option>
                            <option value="$emp_grado_estudios">CUARTO NIVEL</option>
                        @endif
                    </select> 
                </div>
            </div>
                </div>
            </div>
        </div>
        <div>
            <label></label>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('cliente')}}" class="btn btn-danger mb-2">Cancelar</a>
    <!--/form-->
</div>
@endsection