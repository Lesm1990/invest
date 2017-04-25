@extends('layouts.app')

@section('content-pag')

<main>
<div class="row">
	{!! Form::open(['action' => ['ProveedorController@update', $proveedor->id], 'method' => 'put', 'class' => 'col s10 offset-s1']) !!}
		<h4>Modificar Proveedor</h4>
		<hr>
		
		<fieldset class="row">
			<legend><h6>Modificar proveedor</h6></legend>

			<div class="input-field col m4 s12 offset-m4">
				{!! Form::select('proveedores', $proveedores, $proveedor->id, ['placeholder' => 'Selecciona Proveedor', 'id' => 'proveedores']) !!}
			  	{!! Form::label('proveedores', 'Proveedor') !!}
			  <script>
			  	$(document).ready(function() {
				    $('select').material_select();
				});
			  </script>
			</div>
				        
			<div class="input-field col m6 s12">
			  {!! Form::text('nombre', $proveedor->nombre, ['id' => 'nombre', 'class' => 'validate']) !!}
			  {!! Form::label('nombre', 'Nombre de Proveedor') !!}
	        </div>
	        <div class="input-field col m6 s12">
	        	{!!	Form::text('RIF', $proveedor->rif, ['id' => 'RIF', 'class' => 'validate'])	!!}
			  	{!!	Form::label('RIF', 'RIF')	!!}
	        </div>
	        <div class="input-field col m6 s12">
	        	{!!	Form::text('telefono', $proveedor->telefono, ['class' => 'validate', 'id' => 'telefono'])	!!}
			  	{!!	Form::label('telefono', 'Telefono')	!!}
	        </div>
	        <div class="input-field col m6 s12">
	        	{!! Form::email('email', $proveedor->email, ['id' => 'email', 'class' => 'validate']) !!}
			  	{!! Form::label('email', 'Correo Electrónico', ['data-error' => 'Escriba un e-mail correctamente', 'data-success' => 'válido']) !!}	
	        </div>

	        <div class="col s12">
	        	<button class="btn waves-effect waves-light right" type="submit" name="action">Modificar Proveedor
				    <i class="fa fa-plus left"></i>
				</button>
	        </div>

		</fieldset>
	{!!	Form::close()	!!}
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