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
    <form action="{{url('/menu/storeAlmuerzo')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="alm_sopa">Sopa <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->alm_sopa))
                        <input type="input" class="form-control" id="alm_sopa" name="alm_sopa" value="{{$datos->alm_sopa}}" required>
                    @else  
                        <input type="input" class="form-control" id="alm_sopa" name="alm_sopa" placeholder="Sopa del almuerzo" required >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="alm_segundo">Segundo <label style="color:#FF0000";>*</label></label>
                    @if(isset($datos->alm_segundo))
                        <input type="input" class="form-control" id="alm_segundo" name="alm_segundo" value="{{$datos->alm_segundo}}"  required>
                    @else  
                        <input type="input" class="form-control" id="alm_segundo" name="alm_segundo" placeholder="Segundo del almuerzo" required >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="alm_jugo">Jugo</label>
                    @if(isset($datos->alm_jugo))
                        <input type="input" class="form-control" id="alm_jugo" name="alm_jugo" value="{{$datos->alm_jugo}}" >
                    @else  
                        <input type="input" class="form-control" id="alm_jugo" name="alm_jugo" placeholder="Jugo del almuerzo" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="alm_postre">Postre </label>
                    @if(isset($datos->alm_postre))
                        <input type="input" class="form-control" id="alm_postre" name="alm_postre" value="{{$datos->alm_postre}}" required>
                    @else  
                        <input type="input" class="form-control" id="alm_postre" name="alm_postre" placeholder="Postre del almuerzo" required>
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="col-md-4 control-label">Foto del almuerzo</label>
                    <div class="form-group">
                        <input type="file" class="form-control" name="alm_foto" >
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
    </form>
</div>
@endsection