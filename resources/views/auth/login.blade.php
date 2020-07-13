@extends('app')
@section('content')
</br>
</br>
</br>
</br>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <br>
                <br>
                <div style="text-align: center; color: #ED7624;">
                    <h2>ACCESO</h2>
                </div>
                <div class="card-body">
                    <h6>&nbsp;&nbsp;&nbsp;Por favor llene el siguiente formulario con sus credenciales de acceso:</h6>
                    &nbsp;&nbsp;&nbsp;<div class="alert alert-success">Los campos con <label style="color: #ED7624">*</label> son obligatorios</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Uups!</strong> Hubieron algunos problemas mientras se logueaba.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-body pt-0 d-flex justify-content-center">
                    <form role="form" method="POST" action="{{url('/auth/login')}}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col">
                                <h3 style="color: #ED7624">Usuario *</h3>
                                <input type="text" class="form-control" name="usu_usuario" id="usu_usuario" required value="{{old('usu_usuario')}}">
                            </div>
                        </div>
                    </br>
                        <div class="row">
                            <div class="col">
                                <h3 style="color: #ED7624">Clave *</h3>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                        </div>

                        <div class="p-3 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" style="margin-right: 15px;">Ingresar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
</br>
@endsection