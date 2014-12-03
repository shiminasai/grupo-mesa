@extends('templates.maintemplate')

@section('contenido')

<div class="row">
	<hr class='separadortitulo'/>  
  
  @foreach($propiedades as $value)
  <div class="col-xs-12 col-sm-6 col-md-4 col-md-4 vista" >

    <div class="tituloanuncio">
      <h4 style="text-align:center;"><strong>{{ $value->titulo }}</strong></h4>
    </div>

    <?php 
          $expresionregular = "/(^.{0,200})(\W+.*$)/"; 
          $cadena = ($value->descripcion); 
          $reemplazo = "\${1}";
          $dep = DB::table('depto')->where('id','=',$value->departamento)->first();
    ?>

<?php 
  $imagen = PropiedadImg::where('id_propiedad', '=', $value->id )->orderBy('id')->first(); 

  if(!$imagen) $imagen = 'noimage.jpg';
  else $imagen = $imagen->ruta;
?>
    <div class="viewprinc view-second">                  
      <img src="{{ asset('upload/'. $imagen.'') }}"/>
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
            if($value->moneda == 'Dolares'){
              $valor="U$";
            }else{
              $valor="C$";
            }

            
        ?>

    @if($value->tipoanuncio == 'Venta')
    <li class="list-group-item">
        <i class="pull-left usa"><strong>U</strong></i>
        <i class="pull-left fa fa-usd"></i>
        <p class="pull-left"><strong>Venta: {{$valor}} {{$value->precioventa}}</strong></p>
    </li>
    <li class="limpio list-group-item"></li>
    @elseif($value->tipoanuncio == 'Alquiler')
    <li class="list-group-item">
        <i class="pull-left usa"><strong>U</strong></i>
        <i class="pull-left fa fa-usd"></i>
        <p class="pull-left"><strong>Alquiler: {{$valor}} {{$value->precioalquiler}} {{ $value->tiempo }}</strong></strong></p>
    </li>
    <li class="limpio list-group-item"></li>
    @else
    <li class="list-group-item">
        <i class="pull-left usa"><strong>U</strong></i>
        <i class="pull-left fa fa-usd"></i>
        <p class="pull-left"><strong>Venta: {{$valor}} {{$value->precioventa}}</strong></p>
    </li>
    <li class="list-group-item">
        <i class="pull-left usa"><strong>U</strong></i>
        <i class="pull-left fa fa-usd "></i>
        <p class="pull-left"><strong>Alquiler: {{$valor}} {{$value->precioalquiler}} {{ $value->tiempo }}</strong></strong></p>
    </li>
    @endif
    <li class="boton-ver list-group-item">
      <a class="center-block" href="{{  URL::to('VistaCasa/'. $value->id .'#ContenidoPrincipal' ) }}" class="btn btn-small btn-primary">Ver Propiedad</a>
    </li>
      </ul></div>

  @endforeach
</div>

{{ $propiedades->links()  }}
@stop