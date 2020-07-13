@extends('app')
@section('content')
@include('shared.titleindex', array('titulo' => 'Clientes'))

<div class="container-fluid">
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="{{url('cliente/create')}}" class="btn btn-success mb-2">Nuevo</a>
        </div>       
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="row">Número</th>
                <th scope="row">Cédula</th>
                <th scope="row">Nombre</th>
                <th scope="row">Dirección</th>
                <th scope="row">Teléfono</th>
                <th scope="row">Email</th>
                <th scope="row">Acción</th>
            </tr>
        </thead>
        <tbody >
            <input type="hidden" value="{{$cont=1}}">
            @foreach ($clientes as $cli)
            <tr>       
                <td scope="row">{{$cont++}}</td>
                <td scope="row">{{$cli->cli_cedula}}</td>  
                <td scope="row">{{$cli->cli_nombre}}</td>
                <td scope="row">{{$cli->cli_direccion}}</td>  
                <td scope="row">{{$cli->cli_telefono}}</td>
                <td scope="row">{{$cli->cli_email}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{url('cliente/'.$cli->cli_id.'/edit')}}" class="btn btn-primary mb-2"><span class="iconify" data-icon="et:edit" data-inline="false"></span></a>
                        <a id="go" data-toggle="modal" data-target="#confirm-delete" href="{{url('cliente/'.$cli->cli_id.'/destroy')}}" class="btn btn-danger mb-2"><span class="glyphicon glyphicon-trash iconify" data-icon="bx:bx-x-circle" data-inline="false"></span></a>
                        <div class="modal fade" id="confirm-delete" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar registro</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>¿Estás seguro de eliminar el registro?</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-ok" data-dismiss="modal">Sí</button>
                                        <a class="btn btn-danger" data-dismiss="modal">No
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>   
    </table>
</div>
@endsection