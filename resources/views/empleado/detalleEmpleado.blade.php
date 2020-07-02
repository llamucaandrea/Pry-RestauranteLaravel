@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'EMPLEADO'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <h5 style="text-align: center;">DATOS PERSONALES</h5>
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 18rem; height: 16rem">
                <input type="hidden" value="{{$aux=$empleado->emp_foto}}">  
                <img  src="{{asset('empleados/'.$aux)}}"  style="width: 18rem; height: 12rem">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Fotografía</h5>
                </div>
            </div>
        </div>
        <div class="col-md-9">
        </br>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Nombre</th>
                        <td>{{$empleado->emp_nombre}}</td>
                        <th scope="col">Cédula Identidad</th>
                        <td>{{$empleado->emp_cedula}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Teléfono</th>
                        <td>{{$empleado->emp_telefono}}</td>
                        <th scope="col">Dirección</th>
                        <td>{{$empleado->emp_direccion}}</td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <td>{{$empleado->emp_email}}</td>
                        <th scope="col">Area de trabajo</th>
                        <td>{{$empleado->emp_area_trabajo}}</td>
                    <tr>
                        <th scope="col">Comentario</th>
                        <td>{{$empleado->emp_comentario}}</td>
                        <th scope="col"></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="col"></th>
                        <td></td>
                        <th scope="col"></th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </br>
    <h5 style="text-align: center;">ESTUDIOS</h5>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th width="3px">No.</th>
                <th >Instituto</th>
                <th >Años de estudios</th>
                <th >Estado</th>
            </tr>
        </thead>
        <tbody >
            <input type="hidden" value="{{$cont=1}}">
            @foreach ($estudio as $est)
                <tr>                
                    <td scope="row">{{$cont++}}</td>
                    <td scope="row">{{$est->gra_est_instituto}}</td>  
                    <td scope="row">{{$est->gra_est_año_estudio}}</td>
                    <td scope="row">{{$est->gra_est_estado}}</td>  
                </tr>
            @endforeach
        </tbody>   
    </table>
    </br>
    <h5 style="text-align: center;">EXPERIENCIA</h5>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th width="3px">No.</th>
                <th >Empresa</th>
                <th >Tiempo</th>
                <th >Motivo de salida</th>
                <th >Estado de salida</th>
            </tr>
        </thead>
        <tbody >
            <input type="hidden" value="{{$cont=1}}">
            @foreach ($experiencia as $exp)
                <tr>                
                    <td scope="row">{{$cont++}}</td>
                    <td scope="row">{{$exp->exp_empresa}}</td>  
                    <td scope="row">{{$exp->exp_tiempo}}</td>
                    <td scope="row">{{$exp->exp_motivo_salida}}</td>
                    <td scope="row">{{$exp->exp_estado_salida}}</td>  
                </tr>
            @endforeach                
        </tbody>   
    </table>
    </br>
    <h5 style="text-align: center;">REFERENCIAS PERSONALES</h5>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th width="3px">No.</th>
                <th >Nombre</th>
                <th >Teléfono</th>
                <th >Parentesco</th>
            </tr>
        </thead>
        <tbody >
            <input type="hidden" value="{{$cont=1}}">
            @foreach ($referencia as $ref)
                <tr>                
                    <td scope="row">{{$cont++}}</td>
                    <td scope="row">{{$ref->ref_per_nombre}}</td>  
                    <td scope="row">{{$ref->ref_per_telefono}}</td>
                    <td scope="row">{{$ref->ref_per_parentesco}}</td>
                </tr>
            @endforeach
        </tbody>   
    </table>
    <div class="row">
        <div class="col">
            <a href="{{url('empleado')}}" class="btn btn-danger mb-2">Atrás</a>
        </div>
    </div>
</div>
@endsection