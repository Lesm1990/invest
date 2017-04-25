@extends('layouts.app')

@section('content-pag')
<main>
	<div class="row container">
		{!! Form::open(['action' => ['TipoIdentificacionController@update', $tipoIdentificacion->id], 'method' => 'put']) !!}
		<div class="col s12">
			<h4>Modificar Tipo de Identificacion</h4>
			<hr>
			
			<fieldset class="row">
				<legend><h6>Modificar Tipo de Identificacion</h6></legend>

				<div class="input-field col m6 s12">
					{!!	Form::select('tipo_identificacion', $tipoIdentificaciones, $tipoIdentificacion->id, ['placeholder' => 'Selecciona Tipo de Identificacion', 'id' => 'tipo_identificacion'])	!!}
				  	{!!	Form::label('tipo_identificacion', 'Tipo de Identificacion')	!!}
				  <script>
				  	$(document).ready(function() {
					    $('select').material_select();
					});
				  </script>
				</div>
					        
				<div class="input-field col m6 s12">
					{!!	Form::text('nombre', $tipoIdentificacion->descripcion, ['id' => 'nombre', 'class' => 'validate'])	!!}
					{!!	Form::label('nombre', 'Nombre de Tipo de Identificacion')	!!}
		        </div>
		        <div class="col s12">
		        	<button class="btn waves-effect waves-light right" type="submit" name="action">Modificar Tipo de producto
					    <i class="fa fa-plus left"></i>
					</button>
		        </div>

			</fieldset>
		</div>
	</div>
	{!! Form::close() !!}
</main>
@endsection

@section('script')
<script>
	
	$( document ).ready(function(){
		$(".button-collapse").sideNav();	
	})

</script>
@endsection