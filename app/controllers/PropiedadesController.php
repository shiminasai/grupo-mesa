<?php 

	/**
	* 
	*/
	class PropiedadesController extends BaseController
	{
		
		public function guardar(){

			if ($this->validateForm(Input::all()) === true) {
				$propiedad = new Propiedad();
				$propiedad->titulo = Input::get('titulo');
				$propiedad->estado = Input::get('estado');
				$propiedad->tipopropiedad = Input::get('tipopropiedad');
				$propiedad->tipoanuncio = Input::get('tipoanuncio');								
				$propiedad->precioventa = Input::get('precioventa');
				$propiedad->precioalquiler = Input::get('precioalquiler');
				$propiedad->tiempo = Input::get('tiempo');				
				$propiedad->precioadmin = Input::get('precioadmin');
				$propiedad->moneda = Input::get('moneda');
				$propiedad->estadofisico = Input::get('estadofisico');
				$propiedad->anocontruccion = Input::get('anocontruccion');
				$propiedad->medidaconstruccion = Input::get('medidaconstruccion');
				$propiedad->areautil = Input::get('areautil');
				$propiedad->areaterreno = Input::get('areaterreno');
				$propiedad->medidaterreno = Input::get('medidaterreno');
				$propiedad->cuartos = Input::get('cuartos');
				$propiedad->banos = Input::get('banos');	
				$propiedad->garaje = Input::get('garaje');
				$propiedad->estratos = Input::get('estratos');
				$propiedad->descripcion = Input::get('descripcion');
				$propiedad->pais = Input::get('pais');
				$propiedad->departamento = Input::get('departamentoA');
				$propiedad->municipio = Input::get('municipioA');
				$propiedad->zona = Input::get('zona');
				$propiedad->direccion = Input::get('direccion');
				$propiedad->observaciones = Input::get('observaciones');				
				$propiedad->latitud = Input::get('lat');
				$propiedad->longitud = Input::get('lon');
				$propiedad->id_usuario = Input::get('id_usuario');
				$propiedad->url = Input::get('url');
				$propiedad->id_propietario = Input::get('propietario');


				$count = Propiedad::all()->count();

				$aux = Input::get('id_usuario');

				$propiedad->codigo = $aux . '-' . ($count+1);


				
				/*$detalles = Input::get('detalle');
				$detalleca = " ";*/

				$lista = implode(',',$_POST['detalle']); 


				/*foreach ($variable as $key => $value) {
					echo "<script>alert('".$key."');</script>";
					$detalleca += $value;
				}*/


				$propiedad->detallecasa = $lista;

				//$propiedad->save();


				if($propiedad->save()){
					Session::flash('message', 'Seleccionar las imagenes de esta Propiedad');
					return Redirect::to('admin/agregarImagen');
				}
			}else{

				return Redirect::back()->withErrors($this->validateForm(Input::all()))->withInput();
			}


		}

		public function show($id){

			$propiedad = new Propiedad();
			
			$propiedad = propiedad::find($id);

			$propiedad->visitas = $propiedad->visitas + 1 ;

			$propiedad->save();

			return View::make('nosotros.VistaCasa')->with('propiedad', $propiedad);
		}

		public function baja($id){
			
			$propiedad = Propiedad::find($id);

			if($propiedad->estado == 0)	
				$propiedad->estado = 1;
			else
				$propiedad->estado = 0;	


			$propiedad->save();				

			return Redirect::back();

		}
		public function detalle($id){
			$propiedad = Propiedad::find($id);
			return View::make('administrador.detallePropiedad')->with('propiedad', $propiedad);
		}


		public function showupdate($id){
			$propiedad = Propiedad::find($id);
			return View::make('administrador.modPropiedades')->with('propiedad', $propiedad);
		}


		public function update($id){
			
			$propiedad = Propiedad::find($id);
			if($this->validateFormsUp(Input::all()) === true){		

				$propiedad->titulo = Input::get('titulo');
				$propiedad->estado = Input::get('estado');
				$propiedad->tipopropiedad = Input::get('tipopropiedad');
				$propiedad->tipoanuncio = Input::get('tipoanuncio');								
				$propiedad->precioventa = Input::get('precioventa');
				$propiedad->precioalquiler = Input::get('precioalquiler');
				$propiedad->tiempo = Input::get('tiempo');				
				$propiedad->precioadmin = Input::get('precioadmin');
				$propiedad->moneda = Input::get('moneda');
				$propiedad->estadofisico = Input::get('estadofisico');
				$propiedad->anocontruccion = Input::get('anocontruccion');
				$propiedad->medidaconstruccion = Input::get('medidaconstruccion');
				$propiedad->areautil = Input::get('areautil');
				$propiedad->areaterreno = Input::get('areaterreno');
				$propiedad->medidaterreno = Input::get('medidaterreno');
				$propiedad->cuartos = Input::get('cuartos');
				$propiedad->banos = Input::get('banos');	
				$propiedad->garaje = Input::get('garaje');
				$propiedad->estratos = Input::get('estratos');
				$propiedad->descripcion = Input::get('descripcion');
				$propiedad->pais = Input::get('pais');
				$propiedad->departamento = Input::get('departamentoA');
				$propiedad->municipio = Input::get('municipioA');
				$propiedad->zona = Input::get('zona');
				$propiedad->direccion = Input::get('direccion');
				$propiedad->observaciones = Input::get('observaciones');				
				$propiedad->latitud = Input::get('lat');
				$propiedad->longitud = Input::get('lon');
				$propiedad->id_usuario = Input::get('id_usuario');
				$propiedad->url = Input::get('url');
				$propiedad->id_propietario = Input::get('propietario');


				$count = Propiedad::all()->count();

				$aux = Input::get('id_usuario');

				$propiedad->codigo = $aux . '-' . $propiedad->id;


				
				/*$detalles = Input::get('detalle');
				$detalleca = " ";*/

				$lista = implode(',',$_POST['detalle']); 


				/*foreach ($variable as $key => $value) {
					echo "<script>alert('".$key."');</script>";
					$detalleca += $value;
				}*/


				$propiedad->detallecasa = $lista;		

				if($propiedad->save()){					
					Session::flash('message', 'Propiedad Modificado');
					return Redirect::to('administrador/verPropiedades');
				}

			}else{
				return Redirect::back()->withErrors($this->validateFormsUp(Input::all()))->withInput();
			}
		}


		 public function buscar()
		{
		 	$bl = Input::get('busqueda');
			$codigo = Input::get('codigo');
			$departamento = Input::get('departamento');
			$municipio = Input::get('municipio');
			$zona = Input::get('zona');
			$tipo = Input::get('tipo');
			$desde = Input::get('desde');
			$hasta = Input::get('hasta');
			$venta = Input::get('venta');
			$alquiler = Input::get('alquiler');

			 if($desde == null){
			 	$desde=0;
			 }

			 if($hasta == null){
			 	$hasta=999999999999999;
			 }

		
			if ($codigo != '') {
				if ($venta == 'Venta') {
					$resultado = Propiedad::where('estado','=','1')
					->where('codigo', '=', ''.$codigo.'')
					->where('tipoanuncio', '=', 'Venta')->get();

					
				}else{
					$resultado = Propiedad::where('estado','=','1')
					->where('codigo', '=', ''.$codigo.'')
					->where('tipoanuncio', '=', 'Alquiler')->get();

					
				}
			}elseif($bl != ''){
				if ($venta == 'Venta') {
					$resultado = Propiedad::where('estado','=','1')
					->where('titulo','like','%'.$bl.'%')
					->where('tipoanuncio', '=', 'Venta')->get();
				}else{
					$resultado = Propiedad::where('estado','=','1')
					->where('titulo','like','%'.$bl.'%')
					->where('tipoanuncio', '=', 'Alquiler')->get();
				}

			}elseif($codigo == '' && $bl == ''){
				if ($venta == 'Venta') {
					if ($zona != 'Zone' && $municipio != 'Mun' && $departamento != 'Dep') {
						if ($tipo == 'Todos') {
							$resultado = Propiedad::where('zona', '=', ''.$zona.'')
							->where('tipoanuncio', '=', 'Venta')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}else{
							$resultado = Propiedad::where('zona', '=', ''.$zona.'')
							->where('tipoanuncio', '=', 'Venta')
							->where('tipopropiedad', '=', ''.$tipo.'')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}
						
					}elseif($municipio != 'Mun' && $zona == 'Zone' && $departamento != 'Dep'){
						if ($tipo == 'Todos') {
							$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
							->where('tipoanuncio', '=', 'Venta')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}else{
							$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
							->where('tipoanuncio', '=', 'Venta')
							->where('tipopropiedad', '=', ''.$tipo.'')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}
					}
					
				}else{
					if ($zona != 'Zone') {
						if ($tipo == 'Todos') {
							$resultado = Propiedad::where('zona', '=', ''.$zona.'')
							->where('tipoanuncio', '=', 'Alquiler')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}else{
							$resultado = Propiedad::where('zona', '=', ''.$zona.'')
							->where('tipoanuncio', '=', 'Alquiler')
							->where('tipopropiedad', '=', ''.$tipo.'')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}
						
					}elseif($municipio != 'Mun'){
						if ($tipo == 'Todos') {
							$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
							->where('tipoanuncio', '=', 'Alquiler')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}else{
							$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
							->where('tipoanuncio', '=', 'Alquiler')
							->where('tipopropiedad', '=', ''.$tipo.'')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}
					}
					
				}
			}

			if ($departamento == 'Dep' && $venta == 'Venta') {
				if ($tipo == 'Todos') {
							$resultado = Propiedad::where('tipoanuncio', '=', 'Venta')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}else{
							$resultado = Propiedad::where('tipoanuncio', '=', 'Venta')
							->where('tipopropiedad', '=', ''.$tipo.'')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}
			}


			if ($departamento == 'Dep' && $venta == 'Alquiler') {
				if ($tipo == 'Todos') {
							$resultado = Propiedad::where('tipoanuncio', '=', 'Alquiler')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}else{
							$resultado = Propiedad::where('tipoanuncio', '=', 'Alquiler')
							->where('tipopropiedad', '=', ''.$tipo.'')
							->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
							->where('estado', '=', '1')
							->get();
						}
			}

			

			return View::make('buscador')->with('propiedades', $resultado);
		}

		// public function buscar(){

		// 	$bl = Input::get('busqueda');
		// 	$codigo = Input::get('codigo');
		// 	$departamento = Input::get('departamento');
		// 	$municipio = Input::get('municipio');
		// 	$zona = Input::get('zona');
		// 	$tipo = Input::get('tipo');
		// 	$desde = Input::get('desde');
		// 	$hasta = Input::get('hasta');
		// 	$venta = Input::get('venta');
		// 	$alquiler = Input::get('alquiler');



		// 	 if($desde == null){
		// 	 	$desde=0;
		// 	 }

		// 	 if($hasta == null){
		// 	 	$hasta=999999999999999;
		// 	 }


		//  if($codigo != ''){
		//  	if ($venta=='Venta') {
		//  		$resultado = Propiedad::where('codigo', '=', ''.$codigo.'')->where('estado','=','1')
		// 		->where('tipoanuncio', '=', 'Venta')->get();
		// 		return View::make('buscador')->with('propiedades', $resultado);
		//  	} else{
		//  		$resultado = Propiedad::where('codigo', '=', ''.$codigo.'')->where('estado','=','1')
		// 		->where('tipoanuncio', '=', 'Alquiler')->get();

		// 		return View::make('buscador')->with('propiedades', $resultado);
		//  	} 


		//  }else if($bl !=''){

		// 	if ($venta=='Venta') {
		//  		$resultado = '';
		// 		$resultado = Propiedad::where('titulo','like','%'.$bl.'%')
		// 		->Where('estado', '=', '1')->where('tipoanuncio', '=', 'Venta')->get();

		// 		return View::make('buscador')->with('propiedades', $resultado);
				
		//  	} else{
		//  		$resultado = '';
		// 		$resultado = Propiedad::where('titulo','like','%'.$bl.'%')
		// 		->Where('estado', '=', '1')->where('tipoanuncio', '=', 'Alquiler')->get();

		// 		return View::make('buscador')->with('propiedades', $resultado);

				
		//  	} 

		// 	}else{

		// 	}


		// 		if($venta == 'Venta'){
		// 			if ($departamento == 'Dep') {
		// 				if ($tipo == 'Todos') {
		// 					$resultado = Propiedad::where('estado', '=', '1')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))							
		// 					->get();
						

		// 				}else{

		// 					$resultado = Propiedad::where('estado', '=', '1')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->get();

							
		// 				}

		// 			}else if($departamento != 'Dep'){
		// 				if ($tipo != 'Todos') {
		// 					$resultado = Propiedad::where('departamento', '=', ''.$departamento.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}else{
		// 					$resultado = Propiedad::where('departamento', '=', ''.$departamento.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}	

		// 			}else if($departamento == 'Mun'){
		// 				if ($tipo != 'Todos') {
		// 					$resultado = Propiedad::where('departamento', '=', ''.$departamento.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}else{
		// 					$resultado = Propiedad::where('departamento', '=', ''.$departamento.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}	


		// 			}else if ($municipio != 'Mun') {
		// 				if ($tipo == 'Todos') {
		// 					$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();


		// 				}else{
		// 					$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}
		// 			}else{
		// 				if ($tipo == 'Todos') {
		// 					$resultado = Propiedad::where('zona', '=', ''.$zona.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}else{
		// 					$resultado = Propiedad::where('zona', '=', ''.$zona.'')
		// 					->where('tipoanuncio', '=', 'Venta')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();
		// 				}


		// 				}


		// 	}else{

		// 			if ($departamento == 'Dep') {
		// 				if ($tipo == 'Todos') {
		// 					$resultado = Propiedad::where('estado', '=', '1')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))							
		// 					->get();
						

		// 				}else{

		// 					$resultado = Propiedad::where('estado', '=', '1')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->get();

							
		// 				}

		// 			}else if($departamento != 'Dep'){
		// 				if ($tipo == 'Todos') {
		// 					$resultado = Propiedad::where('departamento', '=', ''.$departamento.'')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}else{
		// 					$resultado = Propiedad::where('departamento', '=', ''.$departamento.'')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}	


		// 			}else if ($municipio != 'Mun') {
		// 				if ($tipo == 'Todos') {
		// 					$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();

		// 				}else{
		// 					$resultado = Propiedad::where('municipio', '=', ''.$municipio.'')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();
							

		// 				}
		// 			}else if ($zona != 'Zone') {
		// 				if ($tipo == 'Todos') {
		// 					$resultado = Propiedad::where('zona', '=', ''.$zona.'')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();
							

		// 				}else{
		// 					$resultado = Propiedad::where('zona', '=', ''.$zona.'')
		// 					->where('tipoanuncio', '=', 'Alquiler')
		// 					->where('tipopropiedad', '=', ''.$tipo.'')
		// 					->whereBetween('precioventa', array(''.$desde.'', ''.$hasta.''))
		// 					->where('estado', '=', '1')
		// 					->get();
							
		// 				}


		// 				}



		// 				}

		// 		return View::make('buscador')->with('propiedades', $resultado);

		// 	}
			


		// }

			private function validateFormsUp($inputs = array()){
				$rules = array(
					'titulo' => 'required|max:60|min:10',
					'estado' => 'required',
					'tipopropiedad' => 'required',
					'precioventa'=> 'numeric',
					'precioalquiler' => 'numeric',


					'moneda' => 'required',
					'estadofisico'=> 'required',
					'anocontruccion' => 'required|numeric|min:1900',
					'areautil'=> 'required|numeric',
					'areaterreno'=> 'required|numeric',
					'estratos'=> 'required',
					'descripcion'=> 'required|max:1000',
					'pais'=> 'required',
					'departamentoA'=> 'required',
					'municipioA'=> 'required',
					'zona'=> 'required',
					'direccion'=> 'required',

					'lat'=> 'required',
					'lon'=> 'required',
					'id_usuario'=> 'required',
					'observaciones' => 'max:250',
					'id_usuario'=> 'required'

					);
				$message = array(
					'required' => 'el campo :attribute es requerido',
					'unique' => 'el titulo ya existe'
					);

				$validation = Validator::make($inputs, $rules, $message);

				if($validation->fails()){
					return $validation;
				}else{
					return true;
				}
			}


			private function validateForm($inputs = array()){
				$rules = array(
					'titulo' => 'required|max:60|min:10',
					'estado' => 'required',
					'tipopropiedad' => 'required',
					'precioventa'=> 'numeric',
					'precioalquiler' => 'numeric',


					'moneda' => 'required',
					'estadofisico'=> 'required',
					'anocontruccion' => 'required|numeric|min:1900',
					'areautil'=> 'required|numeric',
					'areaterreno'=> 'required|numeric',
					'estratos'=> 'required',
					'descripcion'=> 'required|max:1000',
					'pais'=> 'required',
					'departamentoA'=> 'required',
					'municipioA'=> 'required',
					'zona'=> 'required',
					'direccion'=> 'required',

					'lat'=> 'required',
					'lon'=> 'required',
					'id_usuario'=> 'required',
					'observaciones' => 'max:250',
					'id_usuario'=> 'required'

					);
				$message = array(
					'required' => 'el campo :attribute es requerido',
					'unique' => 'el titulo ya existe'
					);

				$validation = Validator::make($inputs, $rules, $message);

				if($validation->fails()){
					return $validation;
				}else{
					return true;
				}
			}
		}
		?>