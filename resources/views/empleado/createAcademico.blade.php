@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'Empleado - Grado académico'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <input type="hidden" value="{{$aux=$datos['emp_foto']}}">
    <div class="row">
        <div class="col" style="text-align: center;">
          <div class="card border-info mb-3" style="width: 400px; height: 200px">
            <div class="card-header">Empleado</div>
            <div class="card-body text-info">
                <img src="{{asset('empleados/'.$aux)}}"  style="width: 200px; height: 125px">
            </div>
          </div>
        </div>
        <div class="col">
    </br>
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
        <div class="col">
    </br>
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
    </br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar institución</button>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dispositivo</h5>
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
                                    <input type="input" class="form-control" id="gra_est_estado" name="gra_est_estado" placeholder="Estado de estudio" required>     
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
            @if(isset($estudio))
                @foreach ($estudio as $est)
                    <tr>                
                        <td scope="row">{{$cont++}}</td>
                        <td scope="row">{{$est['gra_est_instituto']}}</td>  
                        <td scope="row">{{$est['gra_est_año_estudio']}}</td>
                        <td scope="row">{{$est['gra_est_estado']}}</td>  
                    </tr>
                @endforeach
            @endif
        </tbody>   
    </table>
        <div class="row">
            <div class="col">
                <a href="{{url('empleado/datoEmpleado')}}" class="btn btn-danger mb-2">Atrás</a>
            </div>
            <div class="col" style="text-align: right;">
                <button type="submit" class="btn btn-primary mb-2">Siguiente</button>
            </div>
        </div>
    </form>
</div>
@endsection