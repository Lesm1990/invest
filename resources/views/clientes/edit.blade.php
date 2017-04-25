@extends('layouts.app')

@section('content-pag')
<main>
	<div class="row">
		{!! Form::open(['action' => ['ClienteController@update', $cliente->id], 'method' => 'put']) !!}
		<div class="col s10 offset-s1">
			<h4>Modificar Cliente</h4>
			<hr>
		

		<fieldset class="row">
			<legend><h6>Modificar Cliente</h6></legend>
			
			<div class="input-field col m1 s4">
				{!!	Form::select('tipoIDN', $tipoIdentificaciones, $cliente->tipoIdentificacion->descripcion, ['id' => 'tipoIDN'])	!!}
				{!!	Form::label('tipoIDN', 'Tipo de Ident')	!!}
			</div>
			<div class="input-field col m3 s8 ">
				{!! Form::text('documento', $cliente->num_identificacion, ['id' => 'documento', 'class' => 'validate'])	!!}
			  	{!! Form::label('documento', 'Identificacion') !!}			  
	        </div>


				        
			<div class="input-field col m4 s12">
				{!! Form::text('nombre', $cliente->nombre, ['id' => 'nombre', 'class' => 'validate'])	!!}
			  	{!! Form::label('nombre', 'Nombre de Cliente') !!}
	        </div>
	        <div class="input-field col m4 s12">
	        	{!! Form::text('apellido', $cliente->apellido, ['id' => 'aellido', 'class' => 'validate'])	!!}
			  	{!! Form::label('apellido', 'Apellido de Cliente') !!}
	        </div>

	        <div class="input-field col m6 s12">
	        	{!! Form::text('telefono', $cliente->telefono, ['id' => 'Telefono', 'class' => 'validate'])	!!}
			  	{!! Form::label('telefono', 'Telefono') !!}
	        </div>

	        <div class="input-field col m6 s12">
	        	{!! Form::email('email', $cliente->email, ['id' => 'email', 'class' => 'validate'])	!!}
			  	{!! Form::label('email', 'Correo Electrónico', ['data-error' => 'Escriba un e-mail correctamente', 'data-success' => 'válido']) !!}
	        </div>

	        <div class="input-field col s12">
	        	{!! Form::textarea('direccion', $cliente->direccion, ['id' => 'direccion', 'class' => 'materialize-textarea', 'data-length' => '140'])	!!}
			  	{!! Form::label('direccion', 'Dirección') !!}
	        </div>

	        <div class="col s12">
	        	<button class="btn waves-effect waves-light right" type="submit" name="action">Modificar Cliente
				    <i class="fa fa-plus left"></i>
				</button>
	        </div>
	        {!!	Form::close() !!}
		</fieldset>
		</div>
	</div>
</main>
@endsection

@section('script')
<script>
	
	$( document ).ready(function(){
		$(".button-collapse").sideNav();	

        $('select').material_select();
    	$('textarea#Direccion').characterCounter();
  
	})

</script>
@endsection