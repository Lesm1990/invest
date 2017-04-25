@extends('layouts.app')

@section('content-pag')
<main>
<div class="row">
	{!! Form::open(['action' => ['ProductoController@update', $producto->id], 'method' => 'put', 'class' => 'col s10 offset-s1']) !!}
		<h4>Buscar Producto</h4>
		<hr>
		
		<fieldset class="row">
			<legend><h6>Buscar Producto</h6></legend>

				        
			<div class="input-field col m4 s12 offset-m4">
			  	{!! Form::select('productos', $productos, $producto->id, ['placeholder' => 'Selecciona Producto', 'id' => 'productos']) !!}
			  	{!! Form::label('productos', 'Producto') !!}
			  <script>
			  	$(document).ready(function() {
				    $('select').material_select();
				});
			  </script>
			</div>

			<div class="input-field col s12">
				{!! Form::text('nombre', $producto->nombre_producto, ['id' => 'nombre', 'class' => 'validate']) !!}
			  	{!! Form::label('nombre', 'Nombre de Producto') !!}
	        </div>	        
	        <div class="input-field col m6 s12">
	        	{!!	Form::select('producto', $tipoProductos, $producto->tipoProducto->id, ['placeholder' => 'Selecciona Tipo', 'id' => 'producto'])	!!}
				{!!	Form::label('producto', 'Tipo de Producto')	!!}
			</div>
			<div class="input-field col m6 s12">
				{!!	Form::select('marca', $marcas, $producto->marca->id, ['placeholder' => 'Selecciona Marca', 'id' => 'marca'])	!!}
				{!!	Form::label('marca', 'Marca del Producto')	!!}
			</div>
	        <div class="input-field col m6 s12">
	        	{!! Form::number('cantidad', $producto->cantidad_producto, ['id' => 'cantidad', 'class' => 'validate', 'min' => '0']) !!}
			  	{!! Form::label('cantidad', 'Cantidad en almacén') !!}
	        </div>
	        <div class="input-field col m6 s12">
	        	{!! Form::text('costo', $producto->costo, ['id' => 'costo', 'class' => 'validate', 'value' => 'Bs. ']) !!}
			  	{!! Form::label('costo', 'Costo unitario') !!}
	        </div>
	        
			<div class="col s12">
	        	<button class="btn waves-effect waves-light right" type="submit" name="action">Modificar Producto
				    <i class="fa fa-search left"></i>
				</button>
	        </div>

		</fieldset>
	{!! Form::close() !!}
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