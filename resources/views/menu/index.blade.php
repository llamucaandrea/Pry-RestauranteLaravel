@extends('app')
@section('content')
<div style="background: #000000">
</br>
</br>
</br>
</br>
<div class="container">
  <div class="page-header" style="text-align: center;">
    <h1 style="color: #FF7C00">MENU</h1>      
  </div>    
</div>
<div class="row">
    <div class="col" style="text-align: right;">
        <a href="{{url('menu/createAlmuerzo')}}" class="btn btn-success mb-2">Ingresar Almuerzo</a>
    </div>       
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    <div class="col">
        <a href="{{url('cliente/create')}}" class="btn btn-success mb-2">Crear Platillo</a>
    </div>    
</div> 
<div class="container">
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
    @if($dia==='SABADO' || $dia==='DOMINGO')
    @else
        <div class="card text-center" style="background: #000000" >
            <div class="card-header " >
                <h3 style="color: #FFF300">
                    ALMUERZO 
                    <label style="color: #FFFFFF">{{$almuerzo1->alm_dia}}</label> 12:00 - 15:00
                </h3>
            </div>
            
            <input type="hidden" value="{{$aux=$almuerzo1->alm_foto}}">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body" style="width: 537px; height: 325px; background: #000000">
                        <img class="rounded-pill border border-white" src="{{asset('almuerzos/'.$aux)}}"  style="width: 475px; height: 275px">
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="card" style="background: #000000">
                      <div class="card-body">
                        <h5 class="card-title" style="color: #6BC822">SOPA <label style="color: #FFFFFF">{{$almuerzo1->alm_sopa}}</label></h5>
                    </br>
                        <h5 class="card-title" style="color: #6BC822">
                            SEGUNDO 
                            @if($dia==='VIERNES')
                            @else
                                OPCION 1
                            @endif
                            <label style="color: #FFFFFF">
                                {{$almuerzo1->alm_segundo}}
                            </label>
                        </h5>
                    </br>
                    @if($dia==='VIERNES')
                    @else
                        <h5 class="card-title" style="color: #6BC822">
                            SEGUNDO OPCION 2
                            <label style="color: #FFFFFF">
                                {{$almuerzo1->alm_segundo2}}
                            </label>
                        </h5>
                    </br>
                    @endif
                        <h5 class="card-title" style="color: #6BC822">JUGO <label style="color: #FFFFFF">{{$almuerzo1->alm_jugo}}</label></h5>
                    </br>
                        <h5 class="card-title" style="color: #6BC822">POSTRE <label style="color: #FFFFFF">{{$almuerzo1->alm_postre}}</label></h5>
                    </br>   
                        <h5 class="card-title" style="color: #2282C8">$ 3.00</h5>
                      </div>               
                    </div>
                </div>
            </div>
        </div>
    <label></label>
    @if($dia==='VIERNES')
        <div class="card text-center" style="background: #000000" >
            
            <input type="hidden" value="{{$aux=$almuerzo1->alm_foto}}">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body" style="width: 537px; height: 325px; background: #000000">
                        <img class="rounded-pill border border-white" src="{{asset('almuerzos/'.$aux)}}"  style="width: 475px; height: 275px">
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="card" style="background: #000000">
                      <div class="card-body">
                        <h5 class="card-title" style="color: #6BC822">SOPA <label style="color: #FFFFFF">{{$almuerzo1->alm_sopa}}</label></h5>
                    </br>
                        <h5 class="card-title" style="color: #6BC822">
                            SEGUNDO 
                            
                            <label style="color: #FFFFFF">
                                PESACADO FRITO
                            </label>
                        </h5>
                    </br>
                        <h5 class="card-title" style="color: #6BC822">JUGO <label style="color: #FFFFFF">{{$almuerzo1->alm_jugo}}</label></h5>
                    </br>
                        <h5 class="card-title" style="color: #6BC822">POSTRE <label style="color: #FFFFFF">{{$almuerzo1->alm_postre}}</label></h5>
                    </br>   
                        <h5 class="card-title" style="color: #2282C8">$ 5.00</h5>
                      </div>               
                    </div>
                </div>
            </div>
        </div>
    <label></label>
    @endif
@endif
    
</div>
</div>
     
@endsection