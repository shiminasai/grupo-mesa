@extends('templates.maintemplate')

@section('buscador')


<div class="row">
	<hr class='separadortitulo1'/>  

@if($propiedades->count() == 0)
<br><br>
<div class="alert alert-info">No se encontro coincidencias con los parametros solicitados</div>
@endif



  @foreach($propiedades as $value)
  
  @if($value->estado == 1)


  <div class="col-md-4 vista" >
<?php $imagen = PropiedadImg::where('id_propiedad', '=', $value->id )->orderBy('id')->first(); ?>
    <div class="tituloanuncio">
      <h4 style="text-align:center;"><strong>{{ $value->titulo }}</strong></h4>
    </div>

    <?php 
          $expresionregular = "/(^.{0,200})(\W+.*$)/"; 
          $cadena = ($value->descripcion); 
          $reemplazo = "\${1}";
          $dep = DB::table('depto')->where('id','=',$value->departamento)->first();
    ?>

    <div class="viewprinc view-second">                  
      <img src="{{ asset('upload/'. $imagen->ruta .'') }}"/>
      <div class="mask"></div>
      <div class="content">
        <h2>{{$value->tipoanuncio}} de {{$value->tipopropiedad}}</h2>
        <p>{{ preg_replace($expresionregular, $reemplazo, $cadena) }}... </p>
       
      </div>
    </div>
    <ul class="list-group">
        <li class="list-group-item">
          <i class="pull-left fa fa-map-marker fa-lg"></i>
          <p class="pull-left">{{ $value->pais }}, {{$dep->opcion}}</p>
        </li>
        <li class="list-group-item">
          <i class="pull-left fa fa-home fa-lg"></i>
          <p class="pull-left">{{$value->tipopropiedad}}</p>
        </li>
        <li class="list-group-item">
           <i class="pull-left fa fa-key fa-lg"></i>
          <p class="pull-left">{{$value->tipoanuncio}}</p>
        </li>
        <?php
            $valor = " ";
            if($value->moneda == 'dolares'){
              $valor="U$";
            }else{
              $valor="C$";
            }

            
        ?>

    @if($value->tipoanuncio == 'Venta')
    <li class="list-group-item">
        <i class="pull-left usa">U</i>
        <i class="pull-left fa fa-usd fa-lg"></i>
        <p class="pull-left"><strong>Venta: {{$valor}} {{$value->precioventa}}</strong></p>
    </li>
    <li class="limpio list-group-item"></li>
    @elseif($value->tipoanuncio == 'Alquiler')
    <li class="list-group-item">
        <i class="pull-left usa">U</i>
        <i class="pull-left fa fa-usd fa-lg"></i>
        <p class="pull-left"><strong>Alquiler: {{$valor}} {{$value->precioalquiler}} {{ $value->tiempo }}</strong></strong></p>
    </li>
    <li class="limpio list-group-item"></li>
    @else
    <li class="list-group-item">
        <i class="pull-left usa">U</i>
        <i class="pull-left fa fa-usd fa-lg"></i>
        <p class="pull-left"><strong>Venta: {{$valor}} {{$value->precioventa}}</strong></p>
    </li>
    <li class="list-group-item">
        <i class="pull-left usa">U</i>
        <i class="pull-left fa fa-usd fa-lg"></i>
        <p class="pull-left"><strong>Alquiler: {{$valor}} {{$value->precioalquiler}} {{ $value->tiempo }}</strong></strong></p>
    </li>
    @endif
    <li class="boton-ver list-group-item">
      <a class="center-block" href="{{  URL::to('VistaCasa/'. $value->id .'#ContenidoPrincipal' ) }}" class="btn btn-small btn-primary">Ver Propiedad</a>
    </li>
    </ul>
  </div>
  @endif

  @endforeach
</div>

@stop