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
		{!!	Form::open(['url' => 'tipoIdentificacion', 'method' => 'post'])	!!}
		<div class="col s10 offset-s1">
			<h4>Tipo de Identificacion</h4>
			<hr>
		

		<fieldset class="row">
			<legend><h6>Nuevo Tipo de Identificacion</h6></legend>
			
			<div class="input-field col s12">
				{!!	Form::text('nombre', null, ['id' => 'nombre', 'class' => 'validate']) !!}
				{!! Form::label('nombre', 'Nombre de Tipo de Identificacion') !!}
	        </div>

	        <div class="col s12">
	        	<button class="btn waves-effect waves-light right" type="submit" name="action">Agregar Tipo de Identificacion
				    <i class="fa fa-plus left"></i>
				</button>
	        </div>
	    {!!	Form::close() !!}
		</fieldset>


			<fieldset class="row">
				<legend><h6>Ver Tipo de Identificaciones</h6></legend>

			        
				<table id="example" class="display nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th class="center"></th>
		                <th class="center">ID</th>
		                <th class="center">Nombre Tipo de Identificacion</th>
		                <th class="center">opciones</th>
		                
		            </tr>
		        </thead>

		        <tbody>
		        	@foreach($tipoIdentificaciones as $ti)
		        	<tr>	
		        		<td></td>
		                <td>{{	$ti->id }}</td>
		                <td>{{	$ti->descripcion }}</td>
		                <td class="center ">
		                	{{ Form::open([ 'method'  => 'delete', 'url' => 'tipoIdentificacion/'.$ti->id ]) }}
		                		<a href="{{ url('/tipoIdentificacion/'.$ti->id.'/edit') }}" style="margin:15px;" class="center tooltipped" data-position="top" data-delay="50" data-tooltip="Editar">
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
	})

</script>
@endsection