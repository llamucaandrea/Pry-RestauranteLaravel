@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'EMPLEADO'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
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
    <table class="table">
        <tbody>
            <tr>
                <th scope="col"></th>
                <td></td>
                <th scope="col"></th>
                <td></td>
            </tr>
        </tbody>
    </table>
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
                
        </tbody>   
    </table>
    <table class="table">
        <tbody>
            <tr>
                <th scope="col"></th>
                <td></td>
                <th scope="col"></th>
                <td></td>
            </tr>
        </tbody>
    </table>
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
                
        </tbody>   
    </table>
    <table class="table">
        <tbody>
            <tr>
                <th scope="col"></th>
                <td></td>
                <th scope="col"></th>
                <td></td>
            </tr>
        </tbody>
    </table>
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
                
        </tbody>   
    </table>
</div>
@endsection