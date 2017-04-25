@extends('layouts.app')

@section('content-pag')
<main>
	<div class="row container">
		{!! Form::open(['action' => ['ValoresAgregadoController@update', $valoresAgregado->id], 'method' => 'put']) !!}
		<div class="col s12">
			<h4>Modificar Valores Agregados</h4>
			<hr>
			
			<fieldset class="row">
				<legend><h6>Modificar Valor Agregado</h6></legend>

				<div class="input-field col m4 s12">
					{!!	Form::select('valor_agregado', $valoresAgregados, $valoresAgregado->id, ['placeholder' => 'Selecciona Valor Agregado', 'id' => 'valor_agregado'])	!!}
				  	{!!	Form::label('valor_agregado', 'Valor Agregado')	!!}
				  <script>
				  	$(document).ready(function() {
					    $('select').material_select();
					});
				  </script>
				</div>
					        
				<div class="input-field col m4 s12">
					{!!	Form::text('nombre', $valoresAgregado->descripcion, ['id' => 'nombre', 'class' => 'validate'])	!!}
					{!!	Form::label('nombre', 'Nombre de Tipo de Identificacion')	!!}
		        </div>
		        <div class="input-field col m4 s12">
					{!!	Form::text('porcentaje', $valoresAgregado->valor, ['id' => 'porcentaje', 'class' => 'validate'])	!!}
					{!!	Form::label('porcentaje', 'Porcentaje (%)')	!!}
		        </div>
		        <div class="col s12">
		        	<button class="btn waves-effect waves-light right" type="submit" name="action">Modificar Valor Agregado
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