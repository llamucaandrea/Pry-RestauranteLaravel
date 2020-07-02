@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'Empleado - Grado académico'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
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
    </br>
    </br>
    <h5 style="text-align: center; ">ESTUDIOS ACADÉMICOS</h5>
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
    </br>
    </br>
    <h5 style="text-align: center; ">EXPERIENCIA LABORAL</h5>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th width="3px">No.</th>
                <th width="120px">Empresa</th>
                <th width="160px">Tiempo de Trabajo</th>
                <th width="160px">Motivo de Salida</th>
                <th width="200px">Estado de Salida</th>
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
                    </tr>
                @endforeach
            @endif
        </tbody>   
    </table>
    </br>
    </br>
    <h5 style="text-align: center; ">REFERENCIAS PERSONALES</h5>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th width="3px">No.</th>
                <th width="120px">Nombre</th>
                <th width="160px">Teléfono</th>
                <th width="160px">Parentesco</th>
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
                    </tr>
                @endforeach
            @endif
        </tbody>   
    </table>
    </br>
    </br>
    <h5 style="text-align: center; ">FOTO PERSONAL</h5>
    <form action="{{url('/empleado/store')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label class="col-md-4 control-label">Foto del empleado</label>
                    <div class="form-group">
                        <input type="file" class="form-control" name="emp_foto" required>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="col">
            <a href="{{url('empleado/datoReferencia')}}" class="btn btn-danger mb-2">Atrás</a>
        </div>
        <div class="col" style="text-align: right;">
            <button type="submit" class="btn btn-success mb-2">Finalizar</button>
        </div>
    </form>
</div>
@endsection