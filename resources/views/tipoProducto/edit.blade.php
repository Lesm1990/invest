@extends('layouts.app')

@section('content-pag')
<main>
	<div class="row container">
		{!! Form::open(['action' => ['TipoProductoController@update', $tipoProducto->id], 'method' => 'put']) !!}
		<div class="col s12">
			<h4>Modificar Tipo de producto</h4>
			<hr>
			
			<fieldset class="row">
				<legend><h6>Modificar Tipo de producto</h6></legend>

				<div class="input-field col m4 s12">
					{!!	Form::select('tipo_producto', $tipoProductos, $tipoProducto->id, ['placeholder' => 'Selecciona Tipo de Producto', 'id' => 'tipo_producto'])	!!}
				  	{!!	Form::label('tipo_producto', 'Tipo de Producto')	!!}
				  <script>
				  	$(document).ready(function() {
					    $('select').material_select();
					});
				  </script>
				</div>
					        
				<div class="input-field col m6 s12">
					{!!	Form::text('nombre', $tipoProducto->descripcion, ['id' => 'nombre', 'class' => 'validate'])	!!}
					{!!	Form::label('nombre', 'Nombre de Tipo de Producto')	!!}
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