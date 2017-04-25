@extends('layouts.app')

@section('content-pag')
<main>
	<div class="row container">
		{!! Form::open(['action' => ['MarcaController@update', $marca->id], 'method' => 'put']) !!}
		<div class="col s12">
			<h4>Modificar Marca</h4>
			<hr>
			
			<fieldset class="row">
				<legend><h6>Modificar Marca</h6></legend>

				<div class="input-field col m5 s12">
				  {!!	Form::select('marca', $marcas, $marca->id, ['placeholder' => 'Selecciona Marca', 'id' => 'marca'])	!!}
				  {!!	Form::label('marca', 'Marca')	!!}
				  <script>
				  	$(document).ready(function() {
					    $('select').material_select();
					});
				  </script>
				</div>
					        
				<div class="input-field col m7 s12">
				  {!!	Form::text('nombre', $marca->nombre, ['class' => 'validate', 'id' => 'nombre'])	!!}
				  {!!	Form::label('nombre', 'Nombre de Marca')	!!}
		        </div>

		        <div class="input-field col s12">
				  {!!	Form::text('descripcion', $marca->descripcion, ['class' => 'validate', 'id' => 'descripcion'])	!!}
				  {!!	Form::label('descripcion', 'Descripcion')	!!}
		        </div>

		        <div class="col s12">
		        	<button class="btn waves-effect waves-light right" type="submit" name="action">Modificar Marca
					    <i class="fa fa-plus left"></i>
					</button>
		        </div>

			</fieldset>
		</div>
	</div>
</main>
@endsection

@section('script')
<script>
	
	$( document ).ready(function(){
		$(".button-collapse").sideNav();	
	})

</script>
@endsection