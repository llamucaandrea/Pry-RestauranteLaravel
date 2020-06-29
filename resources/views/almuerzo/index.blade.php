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
<div class="row container">
    <div class="col" >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('almuerzo/create')}}" class="btn btn-success mb-2">Ingresar Almuerzo</a>
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
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    @else
    @if($dia==='DOMINGO') 
        <div class="alert alert-warning">
            LOS DIAS DOMINGOS NO SE PREPARAN ALMUERZOS
        </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    @elseif($dia==='SABADO') 
        <div class="card" style="background: #000000" >
            <div class="card-header " >
                <h3 style="color: #FFF300; text-align: center;">
                    ALMUERZO TÍPICO 
                    <label style="color: #FFFFFF">DEL SÁBADO</label> 12:00 - 15:00
                </h3>
            </div>            
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="width: 537px; height: 325px; background: #000000">
                            <img class="rounded-pill border border-white" src="{{asset('almuerzoSabado/fritada.jpg')}}"  style="width: 475px; height: 275px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="background: #000000">
                        <div class="card-body">
                            </br>
                            <h5 class="card-title" style="color: #6BC822">SOPA <label style="color: #FFFFFF">Aguado de pollo</label></h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SEGUNDO OPCION 1                       
                                <label style="color: #FFFFFF">
                                    Fritada
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SEGUNDO OPCION 2
                                <label style="color: #FFFFFF">
                                    Pollo al horno
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">JUGO <label style="color: #FFFFFF">Fruta Natural</label></h5>
                            <h5 class="card-title" style="color: #6BC822">POSTRE <label style="color: #FFFFFF"></label></h5>
                            <h5 class="card-title" style="color: #2282C8">$ 3.25</h5>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
        <label></label>
        <label></label>
        </br>
        </br>
        <div class="card " style="background: #000000" >         
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="width: 537px; height: 325px; background: #000000">
                            <img class="rounded-pill border border-white" src="{{asset('almuerzoSabado/Yahuarlocro.jpg')}}"  style="width: 475px; height: 275px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="background: #000000">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #6BC822">SOPA <label style="color: #FFFFFF">Yahuarlocro</label></h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SEGUNDO OPCION 1                       
                                <label style="color: #FFFFFF">
                                    Fritada
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SEGUNDO OPCION 2
                                <label style="color: #FFFFFF">
                                    Pollo al horno
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">JUGO <label style="color: #FFFFFF">Fruta Natural</label></h5>
                            <h5 class="card-title" style="color: #6BC822">POSTRE <label style="color: #FFFFFF"></label></h5>
                            <h5 class="card-title" style="color: #2282C8"><label style="color: #6BC822">PRECIO ALMUERZO </label> $ 5.25</h5>
                            <h5 class="card-title" style="color: #2282C8"><label style="color: #6BC822">PRECIO SOPA </label> $ 3.25</h5>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
        <label></label>
        <div class="card " style="background: #000000" >         
            <div class="row">
                <div class="col-sm-6">
                    </br>
                    <div class="card">
                        <div class="card-body" style="width: 537px; height: 325px; background: #000000">
                            <img class="rounded-pill border border-white" src="{{asset('almuerzoSabado/conejo.jpg')}}"  style="width: 475px; height: 275px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="background: #000000">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #6BC822">
                                SOPA OPCION 1
                                <label style="color: #FFFFFF">
                                    Aguado de Pollo
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SOPA OPCION 2
                                <label style="color: #FFFFFF">
                                    Yahuarlocro
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SEGUNDO 
                                <label style="color: #FFFFFF">
                                    Conejo al horno con papas y salsa de maní
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">JUGO <label style="color: #FFFFFF">Fruta Natural</label></h5>
                            <h5 class="card-title" style="color: #6BC822">POSTRE <label style="color: #FFFFFF"></label></h5>
                            <h5 class="card-title" style="color: #2282C8"><label style="color: #6BC822">PRECIO ALMUERZO OPCION 1</label> $ 6.50</h5>
                            <h5 class="card-title" style="color: #2282C8"><label style="color: #6BC822">PRECIO ALMUERZO OPCION 2</label> $ 8.50</h5>
                            <h5 class="card-title" style="color: #2282C8"><label style="color: #6BC822">PRECIO CONEJO </label> $ 5.50</h5>
                        </div>               
                    </div>
                </div>
            </div>
        </div>
        <label></label>
    @else 
        <div class="card text-center" style="background: #000000" >
            <div class="card-header " >
                <h3 style="color: #FFF300">
                    ALMUERZO 
                    <label style="color: #FFFFFF"> {{$almuerzo1->alm_dia}} </label> 12:00 - 15:00
                </h3>
            </div>       
            <input type="hidden" value="{{$aux=$almuerzo1->alm_foto}}">     
            <div class="row" style="text-align: justify;">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="width: 537px; height: 325px; background: #000000">
                            <img class="rounded-pill border border-white" src="{{asset('almuerzos/'.$aux)}}"  style="width: 475px; height: 275px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="background: #000000">
                        </br>
                        </br>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #6BC822">
                                SOPA 
                                <label style="color: #FFFFFF">
                                    {{$almuerzo1->alm_sopa}}
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SEGUNDO 
                                <label style="color: #FFFFFF">
                                    {{$almuerzo1->alm_segundo}}
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                JUGO 
                                    <label style="color: #FFFFFF">
                                        {{$almuerzo1->alm_jugo}}
                                    </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                POSTRE 
                                    <label style="color: #FFFFFF">
                                        {{$almuerzo1->alm_postre}}
                                    </label>
                                <label style="color: #FFFFFF">
                                    {{$almuerzo1->alm_postre}}
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #2282C8">
                                $ 3.00
                            </h5>
                        </div>      
                    </div>    
                </div>
            </div>
        </div>
        <label></label>
        <div class="card " style="background: #000000" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" style="width: 537px; height: 325px; background: #000000">
                            @if($dia==='VIERNES')
                                <img class="rounded-pill border border-white" src="{{asset('almuerzoSabado/pescado.jpg')}}"  style="width: 475px; height: 275px">
                            @else
                                <img class="rounded-pill border border-white" src="{{asset('almuerzos/'.$aux)}}"  style="width: 475px; height: 275px">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="background: #000000">
                        </br>
                        </br>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #6BC822">
                                SOPA 
                                <label style="color: #FFFFFF">
                                    {{$almuerzo1->alm_sopa}}
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                SEGUNDO                                 
                                @if($dia==='VIERNES')
                                    <label style="color: #FFFFFF">
                                        PESCADO FRITO
                                    </label>
                                @else
                                    <label style="color: #FFFFFF">
                                        {{$almuerzo1->alm_segundo2}}
                                    </label>
                                @endif                                
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                JUGO 
                                <label style="color: #FFFFFF">
                                    {{$almuerzo1->alm_jugo}}
                                </label>
                            </h5>
                            <h5 class="card-title" style="color: #6BC822">
                                POSTRE 
                                <label style="color: #FFFFFF">
                                    {{$almuerzo1->alm_postre}}
                                </label>
                            </h5>
                            @if($dia==='VIERNES')
                                <h5 class="card-title" style="color: #2282C8">
                                    $ 5.00
                                </h5>
                            @else
                                <h5 class="card-title" style="color: #2282C8">
                                    $ 3.00
                                </h5>
                            @endif                              
                        </div>      
                    </div>    
                </div>
            </div>
        </div>
        <label></label>
<div class="row container">
    <div class="col" >
        <a href="{{url('almuerzo/'.$almuerzo1->alm_id.'/edit')}}" class="btn btn-primary mb-2">Modificar Almuerzo</a>
    </div>          
</div> 
<div class="row container">
    <div class="col" >
        <a href="{{url('almuerzo/'.$almuerzo1->alm_id.'/destroy')}}" class="btn btn-danger mb-2">Eliminar Almuerzo</a>
    </div>          
</div> 
@endif
    

</div>
</div>
@endif
@endsection