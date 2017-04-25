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
		{!!	Form::open(['url' => 'productos', 'method' => 'post'])	!!}
		<div class="col s10 offset-s1">
			<h4>Productos</h4>
			<hr>
		

		<fieldset class="row">
			<legend><h6>Nuevo Producto</h6></legend>
			
			<div class="input-field col s12">
			  {!! Form::text('nombre', null, ['id' => 'nombre', 'class' => 'validate']) !!}
			  {!! Form::label('nombre', 'Nombre de Producto') !!}
	        </div>	        
	        <div class="input-field col m6 s12">
	          {!!	Form::select('producto', $tipoProductos, null, ['placeholder' => 'Selecciona Tipo de Producto', 'id' => 'producto'])	!!}
			  {!!	Form::label('producto', 'Tipo de Producto')	!!}
			</div>
			<div class="input-field col m6 s12">
			  {!!	Form::select('marca', $marcas, null, ['placeholder' => 'Selecciona Marca', 'id' => 'marca'])	!!}
			  {!!	Form::label('marca', 'Marca del Producto')	!!}
			</div>
	        <div class="input-field col m6 s12">
	          {!! Form::number('cantidad', null, ['id' => 'cantidad', 'class' => 'validate', 'min' => '0']) !!}
			  {!! Form::label('cantidad', 'Cantidad en almacén') !!}
	        </div>
	        <div class="input-field col m6 s12">
	          {!! Form::text('costo', null, ['id' => 'costo', 'class' => 'validate', 'value' => 'Bs. ']) !!}
			  {!! Form::label('costo', 'Costo Unitario') !!}
	        </div>

	        <div class="col s12">
	        	<button class="btn waves-effect waves-light right" type="submit" name="action">Agregar Producto
				    <i class="fa fa-plus left"></i>
				</button>
	        </div>
	        {!!	Form::close()	!!}
		</fieldset>


			<fieldset class="row">
				<legend><h6>Ver Productos</h6></legend>

			        
				<table id="example" class="display nowrap" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th class="center"></th>
		                <th class="center">ID</th>
		                <th class="center">Nombre Producto</th>
		                <th class="center">Tipo de Producto</th>
		                <th class="center">Marca</th>
		                <th class="center">Cantidad en almacén</th>
		                <th class="center">Precio unitario</th>
		                <th class="center">Opciones</th>
		                
		            </tr>
		        </thead>

		        <tbody>	        
		        	@foreach($productos as $p)
		            <tr>
		            	<td></td>
		            	<td>{{$p->id}}</td>
		                <td>{{$p->nombre_producto}}</td>
		                <td>{{$p->tipoProducto->descripcion}}</td>
		                <td>{{$p->marca->nombre}}</td>
		                <td>{{$p->cantidad_producto}}</td>
		                <td>{{$p->costo}}</td>
		                <td class="center ">
		                	{{ Form::open([ 'method'  => 'delete', 'url' => 'productos/'.$p->id ]) }}
		                		<a href="{{ url('/productos/'.$p->id.'/edit') }}" style="margin:15px;" class="center tooltipped" data-position="top" data-delay="50" data-tooltip="Editar">
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
	})

</script>
@endsection