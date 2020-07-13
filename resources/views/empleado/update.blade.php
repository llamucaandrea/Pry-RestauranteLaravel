@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'Editar Empleado'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
        </br>
        </br>
        <h5 style="text-align: center; ">DATOS PERSONALES</h5>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 21rem">
                    <input type="hidden" value="{{$aux=$datos->emp_foto}}">  
                    <img  src="{{asset('empleados/'.$aux)}}"  style="width: 18rem; height: 16rem">
                    <div class="card-body" style="text-align: center;">
                        <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#foto">Editar Fotografía</button>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="emp_nombre">Nombre</label>
                            <input type="input" class="form-control" id="emp_nombre" name="emp_nombre" value="{{$datos['emp_nombre']}}" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="emp_cedula">Cédula </label>
                            <input type="number" class="form-control" id="emp_cedula" name="emp_cedula" value="{{$datos['emp_cedula']}}"  readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="emp_direccion">Dirección </label>
                            <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" value="{{$datos['emp_direccion']}}" readonly>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="emp_telefono">Teléfono</label>
                            <input type="number" class="form-control" id="emp_telefono" name="emp_telefono" value="{{$datos['emp_telefono']}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"> 
                        <div class="form-group">
                            <label for="emp_email">Email </label>
                            <input type="input" class="form-control" id="emp_email" name="emp_email" value="{{$datos['emp_email']}}" readonly>
                        </div>
                    </div>
                    <div class="col"> 
                        <div class="form-group">
                            <label for="emp_area_trabajo">Area de Trabajo </label>
                            <input type="input" class="form-control" id="emp_area_trabajo" name="emp_area_trabajo" value="{{$datos['emp_area_trabajo']}}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="emp_comentario">Comentario</label>
                            <input type="input" class="form-control" id="emp_comentario" name="emp_comentario" value="{{$datos['emp_comentario']}}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="foto">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fotografía</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('/empleado/updateFoto')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body" method="POST">
                            <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="emp_id" value="{{ $datos->emp_id }}">
                            <div class="container">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="emp_foto">Foto</label>
                                        <input type="file" class="form-control" name="emp_foto" required>
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
        <div style="text-align: right;">
            <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#Personal">Editar Datos Personales</button>
        </div>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Personal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Datos personales</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('/empleado/updatePersonal')}}" method="POST">
                        <div class="modal-body" method="POST">
                            <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="emp_id" value="{{ $datos->emp_id }}">
                            <div class="container">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="emp_nombre">Nombre</label>
                                        <input type="input" class="form-control" id="emp_nombre" name="emp_nombre" value="{{$datos['emp_nombre']}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="emp_cedula">Cédula </label>
                                        <input type="number" class="form-control" id="emp_cedula" name="emp_cedula" value="{{$datos['emp_cedula']}}" >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="emp_direccion">Dirección </label>
                                        <input type="input" class="form-control" id="emp_direccion" name="emp_direccion" value="{{$datos['emp_direccion']}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="emp_telefono">Teléfono</label>
                                        <input type="number" class="form-control" id="emp_telefono" name="emp_telefono" value="{{$datos['emp_telefono']}}">
                                    </div>
                                </div>
                                <div class="col"> 
                                    <div class="form-group">
                                        <label for="emp_email">Email </label>
                                        <input type="input" class="form-control" id="emp_email" name="emp_email" value="{{$datos['emp_email']}}">
                                    </div>
                                </div>
                                <div class="col"> 
                                    <div class="form-group">                   
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
                                                    @if($datos['emp_area_trabajo']=='COCINERO')
                                                        <option value="CAJERO" selected="{{$datos['emp_area_trabajo']}}">CAJERO</option>
                                                    @else                                    
                                                        <option value="CAJERO">CAJERO</option>
                                                    @endif                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="emp_comentario">Comentario</label>
                                        <input type="input" class="form-control" id="emp_comentario" name="emp_comentario" value="{{$datos['emp_comentario']}}">
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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Estudio">Agregar institución</button>

        <div id="Estudio" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Estudios Académicos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('/empleado/storeAcademico')}}" method="POST">
                        <div class="modal-body" method="POST">
                            <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="emp_id" value="{{ $datos->emp_id }}">
                            <div class="container">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="gra_est_instituto">Institución<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="gra_est_instituto" name="gra_est_instituto" placeholder="Nombre de la institución" required >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="gra_est_año_estudio">Años de estudio<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="gra_est_año_estudio" name="gra_est_año_estudio" placeholder="Años que estudio" required >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="gra_est_estado">Estado de estudio<label style="color:#FF0000";>*</label></label>
                                        <select type="input" class="form-control" id="gra_est_estado" name="gra_est_estado" required>
                                            <option>SELECCIONE</option>
                                            <option value="GRADUADO">GRADUADO</option>
                                            <option value="EGRESADO">EGRESADO</option>
                                            <option value="ABANDONADO">ABANDONADO</option>
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
        <h5 style="text-align: center; ">ESTUDIOS ACADÉMICOS</h5>
        <table class="table table-hover table-bordered results">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Años de estudio</th>
                    <th>Estado</th>
                    <th style="text-align: center;">Acción</th>
                </tr>
            </thead>
            <tbody >
                <input type="hidden" value="{{$cont=1}}">
                @if(isset($estudio))
                    @foreach ($estudio as $est)
                        <tr>                
                            <td scope="row">{{$cont++}}</td>
                            <td scope="row">{{$est['gra_est_instituto']}}</td>  
                            <td scope="row">{{$est['gra_est_año_estudio']}}</td>
                            <td scope="row">{{$est['gra_est_estado']}}</td>  
                            <td style="text-align: center;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-primary mb-2" data-toggle="modal" data-target="#editEstudio{{$est->gra_est_id}}"><span class="iconify" data-icon="et:edit" data-inline="false"></span></a>
                                    <div id="editEstudio{{$est->gra_est_id}}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content" style="text-align: left;">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Estudios Académicos</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{url('/empleado/updateAcademico')}}" method="POST">
                                                    <div class="modal-body" method="POST">
                                                        <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="gra_est_id" value="{{ $est['gra_est_id'] }}">         
                                                        <div class="container">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="gra_est_instituto">Institución<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="gra_est_instituto" name="gra_est_instituto" placeholder="Nombre de la institución" value="{{ $est['gra_est_instituto'] }}"required >
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="gra_est_año_estudio">Años de estudio<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="gra_est_año_estudio" name="gra_est_año_estudio" placeholder="Años que estudio" value="{{ $est['gra_est_año_estudio'] }}" required >
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="gra_est_estado">Estado de estudio<label style="color:#FF0000";>*</label></label>
                                                                    <select type="input" class="form-control" id="gra_est_estado" name="gra_est_estado" required>
                                                                        <option>SELECCIONE</option>
                                                                        @if($est['gra_est_estado']=='GRADUADO')
                                                                            <option value="GRADUADO" selected="{{$est['gra_est_estado']}}">GRADUADO</option>
                                                                        @else
                                                                            <option value="GRADUADO">GRADUADO</option>
                                                                        @endif
                                                                        @if($est['gra_est_estado']=='EGRESADO')
                                                                            <option value="EGRESADO" selected="{{$est['gra_est_estado']}}">EGRESADO</option>
                                                                        @else
                                                                            <option value="EGRESADO" >EGRESADO</option>
                                                                        @endif               
                                                                        @if($est['gra_est_estado']=='ABANDONADO')
                                                                            <option value="ABANDONADO" selected="{{$est['gra_est_estado']}}">ABANDONADO</option>
                                                                        @else
                                                                            <option value="ABANDONADO" >ABANDONADO</option>
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
                                    <a href="{{url('empleado/'.$est->gra_est_id.'/destroyAcademico')}}" class="btn btn-danger mb-2"><span class="iconify" data-icon="bx:bx-x-circle" data-inline="false"></span></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>   
        </table>
        </br>
        </br>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Experiencia">Agregar Experiencia</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="Experiencia">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Experiencia Laboral</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('/empleado/storeExperiencia')}}" method="POST">
                        <div class="modal-body" method="POST">
                            <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="emp_id" value="{{ $datos->emp_id }}">
                            <div class="container">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exp_empresa">Empresa<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="exp_empresa" name="exp_empresa" placeholder="Nombre de la empresa de trabajo" required >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exp_tiempo">Tiempo de trabajo<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="exp_tiempo" name="exp_tiempo" placeholder="Tiempo de trabajo" required >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exp_motivo_salida">Motivo de Salida<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="exp_motivo_salida" name="exp_motivo_salida" placeholder="Motivo por el cuál dejo de trabajar" required>     
                                    </div>
                                </div>                            
                                <div class="col">
                                    <div class="form-group">
                                        <label for="exp_estado_salida">Estado de Salida<label style="color:#FF0000";>*</label></label>
                                        <select type="input" class="form-control" id="exp_estado_salida" name="exp_estado_salida" placeholder="PERIODO" required>
                                            <option>SELECCIONE</option>
                                            <option value="MUY MALO">MUY MALO</option>
                                            <option value="MALO">MALO</option>
                                            <option value="REGULAR">REGULAR</option>
                                            <option value="BUENO">BUENO</option>
                                            <option value="MUY BUENO">MUY BUENO</option>
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
        <h5 style="text-align: center; ">EXPERIENCIA LABORAL</h5>
        <table class="table table-hover table-bordered results">
            <thead>
                <tr>
                    <th >No.</th>
                    <th >Empresa</th>
                    <th >Tiempo de Trabajo</th>
                    <th >Motivo de Salida</th>
                    <th >Estado de Salida</th>
                    <th style="text-align: center;">Acción</th>
                </tr>
            </thead>
            <tbody >
                <input type="hidden" value="{{$cont=1}}">
                @if(isset($experiencia))
                    @foreach ($experiencia as $exp)
                        <tr>                
                            <td scope="row">{{$cont++}}</td>
                            <td scope="row">{{$exp['exp_empresa']}}</td>  
                            <td scope="row">{{$exp['exp_tiempo']}}</td>
                            <td scope="row">{{$exp['exp_motivo_salida']}}</td>
                            <td scope="row">{{$exp['exp_estado_salida']}}</td>  
                            <td style="text-align: center;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-primary mb-2" data-toggle="modal" data-target="#editExperiencia{{$exp->exp_id}}"><span class="iconify" data-icon="et:edit" data-inline="false"></span></a>
                                    <a href="{{url('empleado/'.$exp->exp_id.'/destroyExperiencia')}}" class="btn btn-danger mb-2"><span class="iconify" data-icon="bx:bx-x-circle" data-inline="false"></span></a>              
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editExperiencia{{$exp->exp_id}}" style="text-align: left;">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Experiencia Laboral</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{url('/empleado/updateExperiencia')}}" method="POST">
                                                    <div class="modal-body" method="POST">
                                                        <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="exp_id" value="{{ $exp->exp_id }}">
                                                        <div class="container">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="exp_empresa">Empresa<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="exp_empresa" name="exp_empresa" placeholder="Nombre de la empresa de trabajo" value="{{ $exp->exp_empresa }}" required >
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="exp_tiempo">Tiempo de trabajo<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="exp_tiempo" name="exp_tiempo" placeholder="Tiempo de trabajo" value="{{ $exp->exp_tiempo }}" required >
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="exp_motivo_salida">Motivo de Salida<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="exp_motivo_salida" name="exp_motivo_salida" placeholder="Motivo por el cuál dejo de trabajar" value="{{ $exp->exp_motivo_salida }}" required>     
                                                                </div>
                                                            </div>                            
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="exp_estado_salida">Estado de Salida<label style="color:#FF0000";>*</label></label>
                                                                    <select type="input" class="form-control" id="exp_estado_salida" name="exp_estado_salida" placeholder="PERIODO" required>
                                                                        <option>SELECCIONE</option>
                                                                        @if($exp->exp_estado_salida=='MUY MALO')            
                                                                            <option value="MUY MALO" selected="{{$exp->exp_estado_salida}}">MUY MALO</option>
                                                                        @else
                                                                            <option value="MUY MALO">MUY MALO</option>
                                                                        @endif
                                                                        @if($exp->exp_estado_salida=='MALO')            
                                                                            <option value="MALO" selected="{{$exp->exp_estado_salida}}">MALO</option>
                                                                        @else
                                                                            <option value="MALO">MALO</option>
                                                                        @endif
                                                                        @if($exp->exp_estado_salida=='REGULAR')            
                                                                            <option value="REGULAR" selected="{{$exp->exp_estado_salida}}">REGULAR</option>
                                                                        @else
                                                                            <option value="REGULAR">REGULAR</option>
                                                                        @endif
                                                                        @if($exp->exp_estado_salida=='BUENO')            
                                                                            <option value="BUENO" selected="{{$exp->exp_estado_salida}}">BUENO</option>
                                                                        @else
                                                                            <option value="BUENO">BUENO</option>
                                                                        @endif
                                                                        @if($exp->exp_estado_salida=='MUY BUENO')            
                                                                            <option value="MUY BUENO" selected="{{$exp->exp_estado_salida}}">MUY BUENO</option>
                                                                        @else
                                                                            <option value="MUY BUENO">MUY BUENO</option>
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
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>   
        </table>
        </br>
        </br>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Referencia">Agregar Referencia Personal</button>

        <div id="Referencia" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Referencia Personal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('/empleado/storeReferencia')}}" method="POST">
                        <div class="modal-body" method="POST">
                            <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="emp_id" value="{{ $datos->emp_id }}">
                            <div class="container">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ref_per_nombre">Nombre<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="ref_per_nombre" name="ref_per_nombre" placeholder="Nombre de la Referencia" required >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ref_per_telefono">Teléfono<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="ref_per_telefono" name="ref_per_telefono" placeholder="Teléfono de la Referencia" required >
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="ref_per_parentesco">Parentesco con el trabajador<label style="color:#FF0000";>*</label></label>
                                        <input type="input" class="form-control" id="ref_per_parentesco" name="ref_per_parentesco" placeholder="Parentesco con el trabajador" required>     
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
        <h5 style="text-align: center; ">REFERENCIAS PERSONALES</h5>
        <table class="table table-hover table-bordered results">
            <thead>
                <tr>
                    <th >No.</th>
                    <th >Nombre</th>
                    <th >Teléfono</th>
                    <th >Parentesco</th>
                    <th style="text-align: center;">Acción</th>
                </tr>
            </thead>
            <tbody >
                <input type="hidden" value="{{$cont=1}}">
                @if(isset($referencia))
                    @foreach ($referencia as $ref)
                        <tr>                
                            <td scope="row">{{$cont++}}</td>
                            <td scope="row">{{$ref['ref_per_nombre']}}</td>  
                            <td scope="row">{{$ref['ref_per_telefono']}}</td>
                            <td scope="row">{{$ref['ref_per_parentesco']}}</td>
                            <td style="text-align: center;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-primary mb-2" data-toggle="modal" data-target="#editReferencia{{$ref->ref_per_id}}"><span class="iconify" data-icon="et:edit" data-inline="false"></span></a>
                                    <a href="{{url('empleado/'.$ref->ref_per_id.'/destroyReferencia')}}" class="btn btn-danger mb-2"><span class="iconify" data-icon="bx:bx-x-circle" data-inline="false"></span></a>              
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="editReferencia{{$ref->ref_per_id}}" style="text-align: left;">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Referencia Personal</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{url('/empleado/updateReferencia')}}" method="POST">
                                                    <div class="modal-body" method="POST">
                                                        <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="ref_per_id" value="{{ $ref->ref_per_id }}">
                                                        <div class="container">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="ref_per_nombre">Nombre<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="ref_per_nombre" name="ref_per_nombre" placeholder="Nombre de la Referencia" required  value="{{ $ref->ref_per_nombre }}">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="ref_per_telefono">Teléfono<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="ref_per_telefono" name="ref_per_telefono" placeholder="Teléfono de la Referencia" required  value="{{ $ref->ref_per_telefono }}">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="ref_per_parentesco">Parentesco con el trabajador<label style="color:#FF0000";>*</label></label>
                                                                    <input type="input" class="form-control" id="ref_per_parentesco" name="ref_per_parentesco" placeholder="Parentesco con el trabajador" required value="{{ $ref->ref_per_parentesco }}">     
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
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>   
        </table>
        </br>
        </br>    
        <div class="row">
            <div class="col">
                <a href="{{url('empleado')}}" class="btn btn-danger mb-2">Atrás</a>
            </div>
            <div class="col" style="text-align: right;">
                <a href="{{url('empleado')}}" class="btn btn-primary mb-2">Finalizar</a>
            </div>
        </div>
</div>
@endsection