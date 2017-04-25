@extends('layouts.app')

@section('style')
<style type="text/css">
	div.dataTables_wrapper {
        width: 80%;
        margin: 0 auto;
	}
	.backdrop{
       background-color: LightGray;
     }
</style>
@endsection

@section('content-pag')
<main>
	<div class="row">
		{!!	Form::open(['url' => 'clientes', 'method' => 'post'])	!!}
		<div class="col s10 offset-s1">
			<h4>Clientes</h4>
			<hr>
		

		<fieldset class="row">
			<legend><h6>Nuevo Cliente</h6></legend>
			
			<div class="input-field col m1 s4">
				{!!	Form::select('tipoIDN', $tipoIdentificaciones, null, ['id' => 'tipoIDN'])	!!}
				{!!	Form::label('tipoIDN', 'Tipo de Ident')	!!}
			</div>
			<div class="input-field col m3 s8 ">
				{!! Form::text('documento', null, ['id' => 'documento', 'class' => 'validate'])	!!}
			  	{!! Form::label('documento', 'Identificacion') !!}			  
	        </div>


				        
			<div class="input-field col m4 s12">
				{!! Form::text('nombre', null, ['id' => 'nombre', 'class' => 'validate'])	!!}
			  	{!! Form::label('nombre', 'Nombre de Cliente') !!}
	        </div>
	        <div class="input-field col m4 s12">
	        	{!! Form::text('apellido', null, ['id' => 'aellido', 'class' => 'validate'])	!!}
			  	{!! Form::label('apellido', 'Apellido de Cliente') !!}
	        </div>

	        <div class="input-field col m6 s12">
	        	{!! Form::text('telefono', null, ['id' => 'Telefono', 'class' => 'validate'])	!!}
			  	{!! Form::label('telefono', 'Telefono') !!}
	        </div>

	        <div class="input-field col m6 s12">
	        	{!! Form::email('email', null, ['id' => 'email', 'class' => 'validate'])	!!}
			  	{!! Form::label('email', 'Correo Electrónico', ['data-error' => 'Escriba un e-mail correctamente', 'data-success' => 'válido']) !!}
	        </div>

	        <div class="input-field col s12">
	        	{!! Form::textarea('direccion', null, ['id' => 'direccion', 'class' => 'materialize-textarea', 'data-length' => '140'])	!!}
			  	{!! Form::label('direccion', 'Dirección') !!}
	        </div>

	        <div class="col s12">
	        	<button class="btn waves-effect waves-light right" type="submit" name="action">Agregar Cliente
				    <i class="fa fa-plus left"></i>
				</button>
	        </div>
	        {!!	Form::close() !!}
		</fieldset>


			<fieldset class="row">
				<legend><h6>Ver Clientes</h6></legend>

			        
				<table id="example" class="display nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th class="center"></th>
		                <th class="center">ID</th>
		                <th class="center">Identificación</th>
		                <th class="center">Nombre Cliente</th>
		                <th class="center">Telefono</th>
		                <th class="center">Correo Electrónico</th>
		                <th class="center">Dirección</th>
		                <th class="center">Opciones</th>
		                
		            </tr>
		        </thead>

		        <tbody>
		        	@foreach($clientes as $c)
		        	<tr>
		        		<td></td>
		                <td>{{$c->id}}</td>
		                <td>{{$c->tipoidentificacion->descripcion}} {{$c->num_identificacion}}</td>
		                <td>{{$c->nombre}} {{$c->apellido}}</td>
		                <td>{{$c->telefono}}</td>
		                <td>{{$c->email}}</td>
		                <td>{{$c->direccion}}</td>
		                <td class="center ">
		                	{{ Form::open([ 'method'  => 'delete', 'url' => 'clientes/'.$c->id ]) }}
		                		<a href="{{ url('/clientes/'.$c->id.'/edit') }}" style="margin:15px;" class="center tooltipped" data-position="top" data-delay="50" data-tooltip="Editar">
		                			<i class="fa fa-pencil black-text" aria-hidden="true"></i>
		                		</a>
								<button type="submit" style="border: none; background-color: transparent;" class="center tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar">
			                		<i class="fa fa-times black-text" aria-hidden="true"></i>
			                	</button>
				            {{ Form::close() }}
		                </td>
		            </tr>
		            @endforeach
		        </tbody>
		    	</table>


		    
			</fieldset>
		</div>
	</div>
</main>
@endsection

@section('script')
<script>
	
	$( document ).ready(function(){
		$(".button-collapse").sideNav();	
				
		var table = $('#example').DataTable( {
			"scrollX": true,	
			"language": {
	            "decimal": ",",
	            "thousands": "."
	        },	        
	        "order": [[ 1, 'asc' ]],
	        dom: 'Bfrtip',
	        buttons: [
	            {
	                extend: 'copyHtml5',
	                exportOptions: {
	                 columns: ':contains("Office")'
	                }
	            },
	            'excelHtml5',
	            'pdfHtml5'
	        ]        
	    } );

		table.on( 'order.dt search.dt', function () {
	        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
	    } ).draw();

	    $('#example tbody').on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column; 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );	

        $('select').material_select();
    	$('textarea#Direccion').characterCounter();
  
	})

</script>
@endsection