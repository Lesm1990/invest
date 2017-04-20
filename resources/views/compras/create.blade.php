@extends('layouts.app')

@section('content-pag')
<div class="row">
	{!!	Form::open(['url' => 'compras', 'method' => 'post', 'class' => 'col s10 offset-s1'])	!!}
		<h4>Registrar Nueva Compra</h4>
		<hr>
		<div class="input-field col s12">
		  {!!	Form::text('cod_factura', null, ['class' => 'validate', 'id' => 'cod_factura'])	!!}
          {!!	Form::label('cod_factura', 'Código de Factura')	!!}
        </div>
		<fieldset class="row">
			<legend><h6>Ficha de Compra</h6></legend>

				        
			<div class="input-field col m4 s12">
				{!!	Form::select('proveedor', [
						'1' => 'Proveedor 1', 
						'2' => 'Proveedor 2',
						'3' => 'Proveedor 3'
						], null, ['placeholder' => 'Selecciona Proveedor', 'id' => 'proveedor'])	!!}
				{!!	Form::label('proveedor', 'Proveedor')	!!}

			  <script>
			  	$(document).ready(function() {
				    $('select').material_select();
				});
			  </script>
			</div>
			<div class="input-field col m4 s12">
				{!!	Form::select('marca', [
						'1' => 'Marca 1', 
						'2' => 'Marca 2',
						'3' => 'Marca 3'
						], null, ['placeholder' => 'Selecciona Marca', 'id' => 'marca'])	!!}
				{!!	Form::label('marca', 'Marca')	!!}

			  <script>
			  	$(document).ready(function() {
				    $('select').material_select();
				});
			  </script>
			</div>
			<div class="input-field col m4 s12">
			  {!!	Form::select('producto', [
						'1' => 'Producto 1', 
						'2' => 'Producto 2',
						'3' => 'Producto 3'
						], null, ['placeholder' => 'Selecciona Producto', 'id' => 'producto'])	!!}
				{!!	Form::label('producto', 'Producto')	!!}

			  <script>
			  	$(document).ready(function() {
				    $('select').material_select();
				});
			  </script>
			</div>

			<div class="input-field col m6 s12">
			  {!!	Form::text('precio', null, ['class' => 'validate', 'id' => 'precio', 'value' => 'Bs. '])	!!}
          	  {!!	Form::label('precio', 'Precio Unitario')	!!}
	        </div>
	        <div class="input-field col m6 s12">
	          {!!	Form::number('cantidad', null, ['class' => 'validate', 'id' => 'cantidad', 'value' => '50', 'min' => '50', 'max' => '500'])	!!}
          	  {!!	Form::label('cantidad', 'Cantidad')	!!}
	        </div>
			
			<div class="col m6 s12">
			 	<h6>Fecha de Facturación</h6><!--Revisar-->
			 	{!!	Form::date('fecha_facturacion', null, ['class' => 'datepicker', 'id' => 'fecha_facturacion'])	!!}
			</div>
			<div class="col m6 s12">
			 	<h6>Fecha de Registro</h6><!--Revisar-->
			 	{!!	Form::date('fecha_registro', null, ['class' => 'datepicker', 'id' => 'fecha_registro'])	!!}
			</div>
			<div class="col s12">
				<div id="del" class="btn waves-effect waves-light left" name="action">Eliminar Ultimo Agregado
				    <i class="fa fa-times left"></i>
				</div>
				<div id="add" class="btn waves-effect waves-light right" name="action">Agregar Nuevo Producto
				    <i class="fa fa-plus left"></i>
				</div>				
			</div>

			<div class="col s12">
								
			</div>

			<div class="col s12">
				
				
				
				    <table id="tabla">
				    	<thead>
					        <tr>
					        	<td>ID</td>
					            <td>Proveedor</td>
					            <td>Marca</td>
					            <td>Producto</td>
					            <td>Precio U.</td>
					            <td>Cantidad</td>
					            <td>Fecha de Facturación</td>
					            <td>Fecha de Registro</td>
					            <!-- podemos añadir tantas columnas como deseemos -->
					            <!--<td>tercera columna</td>-->
					        </tr>
					    </thead>
				    </table>
				
			</div>
			
			<input type="submit"/> 

		</fieldset>
	{!! Form::close() !!}
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        /**
         * Funcion para añadir una nueva columna en la tabla
         */
        $("#add").click(function(){
            // Obtenemos el numero de filas (td) que tiene la primera columna
            // (tr) del id "tabla"

            var tds=$("#tabla tr:first td").length;
            // Obtenemos el total de columnas (tr) del id "tabla"
            var trs=$("#tabla tr").length;
            var nuevaFila="<tr>";
            nuevaFila+="<td>"+(trs);
       		nuevaFila+='<td><input id="proveedor'+trs+'" type="text" class="validate" value="'+$('#proveedor option:selected').text()+'"></td>';
       		nuevaFila+='<td><input id="marca'+trs+'" type="text" class="validate" value="'+$('#marca option:selected').text()+'"></td>';
       		nuevaFila+='<td><input id="producto'+trs+'" type="text" class="validate" value="'+$('#producto option:selected').text()+'"></td>';
       		nuevaFila+='<td><input id="precioU'+trs+'" type="text" class="validate" value="'+$('#precio').val()+'"></td>';

       		nuevaFila+='<td><input id="cantidad'+trs+'" type="number" class="validate" value="'+$('#cantidad').val()+'" min="50" max="500"></td>';

       		nuevaFila+='<td><input id="fecha_facturacion'+trs+'" value="'+$('#fecha_facturacion').val()+'" type="text"></td>';
       		nuevaFila+='<td><input id="fecha_registro'+trs+'" value="'+$('#fecha_registro').val()+'" type="text"></td>';
       		
            /*for(var i=5;i<tds;i++){
                // añadimos las columnas
                nuevaFila+='<td><input id="proveedor'+trs+'" type="text" class="validate" value="'+$('#proveedor option:selected').text()+'"></td>';
            }*/
            // Añadimos una columna con el numero total de columnas.
            // Añadimos uno al total, ya que cuando cargamos los valores para la
            // columna, todavia no esta añadida
            


            nuevaFila+="</tr>";
            $("#tabla").append(nuevaFila);
        });
 
        /**
         * Funcion para eliminar la ultima columna de la tabla.
         * Si unicamente queda una columna, esta no sera eliminada
         */
        $("#del").click(function(){
            // Obtenemos el total de columnas (tr) del id "tabla"
            var trs=$("#tabla tr").length;
            if(trs>1)
            {
                // Eliminamos la ultima columna
                $("#tabla tr:last").remove();
            }
        });
    });
    </script>
@endsection