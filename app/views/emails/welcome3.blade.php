<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oferta</title>
</head>
<body>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="margin:0;padding:0;height:100%!important;width:100%!important">
            	<tbody>
               	<tr>
                	<td align="center" valign="top" style="border-collapse:collapse">
                	
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="margin:0;padding:0;background-color:#7f97b7;height:100%!important;width:100%!important">
            	<tbody>
               	<tr>
               	    <td valign="middle" style="padding-top:20px;border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left; padding-left:10px">
                      El/La Señor@ {{$name1}} de correo {{$email1}}, compartió esta propiedad con usted<br> 
                      y le dejó el siguiente mensaje: <br>
                      {{$mensaje1}}. <br>
                      <br>
                      Para mas información sobre esta propiedad de click en el boton ver más o escribanos a ventas@grupo-mesa.com <br>
                      Estamos a sus servicios.
               	    </td>
               	</tr>
               	<tr>
                	<td align="center" valign="top" style="border-collapse:collapse"> 
                        
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        	<tbody><tr>
                            	<td align="center" valign="top" style="border-collapse:collapse">
                                	
                                    <table border="0" cellpadding="20" cellspacing="0" width="100%" style="border-top:0;border-bottom:0;background-color:#7f97b7">
                                    	<tbody><tr>
                                        	<td align="center" valign="top" style="padding-top:40px;border-collapse:collapse">
                                            	<table border="0" cellpadding="0" cellspacing="0" width="800" style="background-color:#395171">
                                                	<tbody><tr>
                                                    	<td width="200" style="padding:20px;border-collapse:collapse;background-color:#395171;color:#f4f4f4;font-family:Georgia;font-size:18px;font-weight:normal;line-height:125%;text-align:center;vertical-align:middle"><h1 style="color:#f4f4f4;display:block;font-family:Impact;font-size:72px;font-weight:normal;letter-spacing:normal;line-height:85%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:center">{{$tiposhare}}</h1>
</td>
                                                    	<td align="left" rowspan="2" valign="top" width="400" style="padding:20px;border-collapse:collapse;background-color:#395171">
                                                       	<?php $minibanner = DB::table('propiedades_img')->where('id_propiedad','=',$idshare)->take(1)->get(); ?>    
                                                       	@foreach($minibanner as $value)
                                                       	
                                                        	<img src="{{ asset('upload/'. $value->ruta .'') }}" alt="" border="0" style="margin:0;padding:0;max-width:400px;border:0;min-height:auto;line-height:100%;outline:none;text-decoration:none" class="CToWUd a6T" tabindex="0">@endforeach
                                                        	<div class="a6S" dir="ltr" style="opacity: 0.01; left: 807.850723266602px; top: 342.666656494141px;"><div id=":3t" class="T-I J-J5-Ji aQv T-I-ax7 L3 a5q" role="button" tabindex="0" aria-label="Descargar el archivo adjunto " data-tooltip-class="a1V" data-tooltip="Descargar"><div class="aSK J-J5-Ji aYr"></div></div></div>
                                                        </td>
                                                    </tr>
                                                	<tr>
                                                    	<td align="center" valign="top" style="padding:20px;border-collapse:collapse;background-color:#7f97b7">
                                                            <table border="0" cellpadding="15" cellspacing="0" style="background-color:#fd900f;border-radius:5px">
                                                            	<tbody><tr>
                                                                	<td valign="top" style="border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:16px;font-weight:normal;line-height:100%;text-align:center;text-decoration:none"><a href="{{$urlshare}}" style="color:#ffffff;font-family:Helvetica;font-size:16px;font-weight:normal;line-height:100%;text-align:center;text-decoration:none" target="_blank">Ver Más.</a></td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                                                    <td align="center" valign="middle" width="200" style="border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:center">
                                                                        <h2 style="color:#f4f4f4;display:inline;font-family:Helvetica;font-size:35px;font-weight:bold;letter-spacing:-2px;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:center">{{$tituloshare}}</h2>
                                                                    </td>
                            </tr>
                            
                            
                            
                            <tr>
                            	<td align="center" valign="top" style="border-collapse:collapse">
                                	
                                	<table border="0" cellpadding="20" cellspacing="0" width="100%" style="background-color:#7f97b7;border-top:0;border-bottom:0">
                                    	<tbody><tr>
                                        	<td align="center" valign="top" style="padding-bottom:40px;border-collapse:collapse">
                                            	<table border="0" cellpadding="0" cellspacing="0" width="600">
                                                	<tbody><tr>
                                                        <td valign="top" width="400" style="border-collapse:collapse">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody><tr>
                                                                    <td valign="middle" width="200" style="border-collapse:collapse;color:#bbbbbb;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left">
                                                                        <h2 style="color:#dddddd;display:inline;font-family:Helvetica;font-size:28px;font-weight:normal;letter-spacing:-2px;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left">
                                                                        
                                                                        @if($anuncioshare == 'Venta')
                                                                            {{$pvtashare}}
                                                                        @elseif($anuncioshare == 'Alquiler')
                                                                            {{$palshare}}
                                                                        @else
                                                                            {{$pvtashare}}<br> 
                                                                            {{$palshare}}<br>
                                                                            {{$anuncioshare}}
                                                                        @endif
                                                                        
                                                                        </h2>
                                                                    </td>
                                                                    <td valign="top" style="border-collapse:collapse">
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tbody><tr>
                                                                                <td valign="top" style="padding-right:10px;padding-left:10px;border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left"><h4 style="color:#f4f4f4;display:inline;font-family:Impact;font-size:21px;font-weight:normal;letter-spacing:normal;line-height:100%;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-align:left">{{$cuartosshare}}</h4>
Cuartos</td>
                                                                                <td valign="top" style="padding-right:10px;padding-left:10px;border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left"><h4 style="color:#f4f4f4;display:inline;font-family:Impact;font-size:21px;font-weight:normal;letter-spacing:normal;line-height:100%;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-align:left">N° ID: {{$idshare}}</h4> 
</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td valign="top" style="padding-top:10px;padding-right:10px;padding-left:10px;border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left"><h4 style="color:#f4f4f4;display:inline;font-family:Impact;font-size:21px;font-weight:normal;letter-spacing:normal;line-height:100%;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-align:left">{{$banosshare}}</h4>
Baños</td>
                                                                                <td valign="top" style="padding-top:10px;padding-left:10px;border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left"><h4 style="color:#f4f4f4;display:inline;font-family:Impact;font-size:21px;font-weight:normal;letter-spacing:normal;line-height:100%;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;text-align:left">{{$terrenoshare}}</h4>
{{$medidashare}}</td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tbody><tr>
                                                                	<td valign="top" style="padding-top:20px;border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:center">{{$descshare}}</td>
                                                                </tr>
                                                                        </tbody></table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                	<td align="center" valign="top" style="padding-top:20px;border-collapse:collapse">
                                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                                            <tbody><tr>
                                                                                <td align="center" valign="top" width="300" style="padding-top:20px;border-collapse:collapse">
                                                                                   <?php $minibanner1 = DB::table('propiedades_img')->where('id_propiedad','=',$idshare)->skip(1)->take(1)->get(); ?> @foreach($minibanner1 as $value1)
                                                                                    <img src="{{ asset('upload/'. $value1->ruta .'') }}" width="100%" alt="" border="0" style="margin:0;padding:0;max-width:300px;border:0;min-height:auto;line-height:100%;outline:none;text-decoration:none" class="CToWUd">@endforeach
                                                                                </td>
                                                                                <td width="40" style="padding-top:20px;border-collapse:collapse">
                                                                                	<br>
                                                                                </td>
                                                                                <td align="center" valign="top" width="300" style="padding-top:20px;border-collapse:collapse">
                                                                                  <?php $minibanner2 = DB::table('propiedades_img')->where('id_propiedad','=',$idshare)->skip(2)->take(1)->get(); ?> 
                                                                                   @foreach($minibanner2 as $value2)
                                                                                    <img src="{{ asset('upload/'. $value2->ruta .'') }}" width="100%" alt="" border="0" style="margin:0;padding:0;max-width:300px;border:0;min-height:auto;line-height:100%;outline:none;text-decoration:none" class="CToWUd"> @endforeach
                                                                                </td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="top" style="padding-top:20px;border-collapse:collapse;color:#f4f4f4;font-family:Helvetica;font-size:15px;line-height:150%;text-align:left"><h2 style="color:#f4f4f4;display:inline;font-family:Helvetica;font-size:35px;font-weight:normal;letter-spacing:-2px;line-height:100%;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;text-align:left">Algunos Detalles:</h2>
<br>
            <ul >			
				<?php 
					$detail = explode(",", $detalleshare);
                    $cont = 0;
				?>

				@foreach($detail as $value)	
				    @if($cont<9)			
					    <li> {{ $value }} </li>
					    <?php $cont++; ?>
					@endif
				@endforeach
			</ul>

                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                    </td>
                </tr>
            </tbody></table>
            <table>
</body>
</html>