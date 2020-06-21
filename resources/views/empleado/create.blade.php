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
    <form action="{{url('/empleado/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="emp_nombre">Nombre <label style="color:#FF0000";>*</label></label>
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
                    <label for="emp_direccion">Dirección <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->emp_direccion))
                        <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" value="{{$datos->emp_direccion}}" required>
                    @else  
                        <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" placeholder="Dirección del empleado" required>
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
                    <label for="emp_email">Email </label>
                    @if(isset($datos->emp_email))
                        <input type="input" class="form-control" id="emp_email" name="emp_email" value="{{$datos->emp_email}}" >
                    @else  
                        <input type="input" class="form-control" id="emp_email" name="emp_email" placeholder="Email del empleado" >
                    @endif
                </div>
            </div>
            <div class="col"> 
                <div class="form-group">
                    <label for="emp_area_trabajo">Area de Trabajo <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->emp_area_trabajo))
                        <input type="input" class="form-control" id="emp_area_trabajo" name="emp_area_trabajo" value="{{$datos->emp_area_trabajo}}" required>
                    @else  
                        <input type="input" class="form-control" id="emp_area_trabajo" name="emp_area_trabajo" placeholder="Area de Trabajo del empleado" required>
                    @endif
                </div>
            </div>
            <!--div class="col"> 
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
            </div-->
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="emp_comentario">Comentario</label>
                    @if(isset($datos->emp_comentario))
                        <input type="input" class="form-control" id="emp_comentario" name="emp_comentario" value="{{$datos->emp_comentario}}" >
                    @else  
                        <input type="input" class="form-control" id="emp_comentario" name="emp_comentario" placeholder="Comentario del empleado" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="col-md-4 control-label">Foto del empleado</label>
                    <div class="form-group">
                        <input type="file" class="form-control" name="file" >
                    </div>
                </div>
            </div>
        </div>
        <div>
            <label></label>
        </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar Instituciones</button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Instituciones</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('/empleado/gradoAcademico')}}" method="POST">
                    <div class="modal-body" method="POST">
                        <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="container">
                            <div class="col">
                                <div class="form-group">
                                    <label for="gra_est_instituto">Instituto<label style="color:#FF0000";>*</label></label>
                                    <input type="input" class="form-control" id="gra_est_instituto" name="gra_est_instituto" placeholder="Nombre del Instituto" required >
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="gra_est_año_estudio">Años de estudio<label style="color:#FF0000";>*</label></label>
                                    <input type="input" class="form-control" id="gra_est_año_estudio" name="gra_est_año_estudio" placeholder="Años estudiados" required >
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="gra_est_estado">Estado de estudio<label style="color:#FF0000";>*</label></label>
                                    <select type="input" class="form-control" id="emp_grado_estudios" name="emp_grado_estudios" placeholder="GRADO DE ESTUDIOS" required>
                                        <option>SELECCIONE</option>
                                        @if(isset($datos->emp_grado_estudios))
                                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">NINGUNO</option>
                                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">PRIMARIA</option>
                                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">BACHILLERATO</option>
                                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">TERCER NIVEL</option>
                                            <option value="$emp_grado_estudios" selected="{{$datos->emp_grado_estudios}}">CUARTO NIVEL</option>
                                        @else  
                                            <option value="$emp_grado_estudios">ABANDONADO</option>
                                            <option value="$emp_grado_estudios">GRADUADO</option>
                                        @endif
                                    </select>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    </br>
    </br>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th width="3px">No.</th>
                <th width="120px">Nombre</th>
                <th width="160px">Años de estudio</th>
                <th width="200px">Estado</th>
            </tr>
        </thead>
        <tbody >
            <input type="hidden" value="{{$cont=1}}">
            
        </tbody>   
    </table>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('cliente')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection