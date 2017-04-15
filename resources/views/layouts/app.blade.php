<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INVEST</title>


	<link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('/css/materialize.min.css') }}">
	<link rel="stylesheet" href="{{ url('/css/style.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{ url('/js/materialize.min.js') }}"></script>

</head>
<body>

<header>
	<nav>
		<div class="nav-wrapper container">
			<a href="#!" class="brand-logo ">
				<i class="fa fa-cubes" aria-hidden="true"></i>
				<span style="color:#fff;">INVEST</span>
			</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</a>
			<ul id="nav-mobile" class="menu right hide-on-med-and-down">
				<li><a href="#!">Inicio</a></li>
				<li><a href="#!">Compras</a>
					<ul class="">
						<li><a href="#!">One</a></li>
						<li><a href="#!">Two</a></li>
						<li><a href="#!">Three</a></li>
					</ul>
				</li>					
				<li><a href="#!">Ventas</a></li>
				<li><a href="#!">Opciones</a></li>
				<li><a href="#!">Salir</a></li>
			</ul>

			<ul class="side-nav hide-on-large-only" id="mobile-demo">
				<li>
					<div class="background" style="color: #0C1021">
			        	<i class="fa fa-cubes" aria-hidden="true"></i>
						<span>INVEST</span>
			      	</div>
				</li>
		        <li><a href="#!">Inicio</a></li>
				<li><a href="#!">Compras</a>
					<ul class="">
						<li><a href="#!">One</a></li>
						<li><a href="#!">Two</a></li>
						<li><a href="#!">Three</a></li>
					</ul>
				</li>					
				<li><a href="#!">Ventas</a></li>
				<li><a href="#!">Opciones</a></li>
				<li><a href="#!">Salir</a></li>
		    </ul>
		</div>
	</nav>
</header>



<div class="row container">
	<div class="col s12">
		<h1>h1: Lorem ipsum dolor sit amet</h1>
		<h2>h2: Lorem ipsum dolor sit amet</h2>
		<h3>h3: Lorem ipsum dolor sit amet</h3>
		<h4>h4: Lorem ipsum dolor sit amet</h4>
		<h5>h5: Lorem ipsum dolor sit amet</h5>
	</div>
	
	<div class="col m4 s12">
		<button class="btn waves-effect waves-light" type="submit" name="action">Submit
		    <i class="fa fa-paper-plane-o left"></i>
		</button>
	</div>
	<br>
	<div class="col m4 s12">
		 <a class="waves-effect waves-teal btn-flat">Raised</a>
	</div>
	<div class="col m4 s12">
		 <!-- Modal Trigger -->
		  <a class="waves-effect waves-light btn" href="#modal1">Dialog Modal</a>

		  <!-- Modal Structure -->
		  <div id="modal1" class="modal modal-fixed-footer">
		    <div class="modal-content">
		      <h4>Modal Header</h4>
		      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>

				<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>

				<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>

				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>

				<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>

				<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
		    </div>
		    <div class="modal-footer">
		      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Disagree</a>
		      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
		    </div>
		  </div>
		  <script>
		  	$(document).ready(function(){
			    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
			    $('.modal').modal();
			  });
			</script>
	</div>
	
	<br>
	<div class="col s12">
		<h5>Preloader Indeterminado</h5>
		<div class="progress">
			<div class="indeterminate"></div>
		</div>	
	</div>
	 <br>
	<div class="col s12">
				
		<strong>Etiqueta Strong</strong>  <span>Etiqueta Span</span>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>

		<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>

		<p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>

		<p>Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
	</div>



	<div class="col s12">
		<h5>Tabla desplegada</h5>
		 <table>
	        <thead>
	          <tr>
	              <th>Name</th>
	              <th>Item Name</th>
	              <th>Item Price</th>
	          </tr>
	        </thead>

	        <tbody>
	          <tr>
	            <td>Alvin</td>
	            <td>Eclair</td>
	            <td>$0.87</td>
	          </tr>
	          <tr>
	            <td>Alan</td>
	            <td>Jellybean</td>
	            <td>$3.76</td>
	          </tr>
	          <tr>
	            <td>Jonathan</td>
	            <td>Lollipop</td>
	            <td>$7.00</td>
	          </tr>
	        </tbody>
	      </table>
	</div>

    <form class="col s12">
    	<fieldset>
    	<legend><h5>Formulario con campos</h5></legend>
	      <div class="row">
	        <div class="input-field col m6 s12">
	          <input id="first_name" type="text" class="validate">
	          <label for="first_name">First Name</label>
	        </div>
	        <div class="input-field col m6 s12">
	          <input id="last_name" type="text" class="validate">
	          <label for="last_name">Last Name</label>
	        </div>
	        <div class="input-field col m6 s12">
	          <input id="password" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	        <div class="input-field col m6 s12">
	          <input id="email" type="email" class="validate">
	          <label for="email" data-error="Escriba un e-mail correctamente" data-success="válido">Email</label>
	        </div>

	        <div class="input-field col m6 s12">
			  <select>
			    <option value="" disabled selected>Escoge una Opción</option>
			    <option value="1">Option 1</option>
			    <option value="2">Option 2</option>
			    <option value="3">Option 3</option>
			  </select>
			  <label>Dropdown Select</label>

			  <script>
			  	$(document).ready(function() {
				    $('select').material_select();
				});
			  </script>
			</div>
			<div class="col m6 s12">
				<div class="row">
					<h6>Radio Buttons</h6>
					<div class="col m3 s6">
						<input class="with-gap" name="group1" type="radio" id="test1"  />
      					<label for="test1">One</label>
					</div>
					<div class="col m3 s6">
						<input class="with-gap" name="group1" type="radio" id="test2"  />
      					<label for="test2">Two</label>
					</div>
					<div class="col m3 s6">
						<input class="with-gap" name="group1" type="radio" id="test3"  />
      					<label for="test3">Three</label>
					</div>
					<div class="col m3 s6">
						<input class="with-gap" name="group1" type="radio" id="test4" disabled="disabled"/>
      					<label for="test4">Four</label>
					</div>
				</div>
			</div>

			<div class="col s12 range-field">
				<h6>Selector de Rango</h6>
			    <input type="range" id="test5" min="0" max="100" />
			</div>

      		<div class="col m6 offset-m1 s12">
				<div class="row">
					<h6>Radio Buttons</h6>
					<div class="col m4 s6">
						<input type="checkbox" id="test5" />
      					<label for="test5">One</label>
      				</div>
					<div class="col m4 s6">
						<input type="checkbox" id="test6" checked="checked" />
      					<label for="test6">Two</label>
      				</div>
					<div class="col m4 s6">
						<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      					<label for="filled-in-box">Three</label>
      				</div>
					<div class="col m4 s6">
						<input type="checkbox" id="indeterminate-checkbox" />
      					<label for="indeterminate-checkbox">Four</label>
					</div>
					<div class="col m4 s6">
						<input type="checkbox" id="test7" checked="checked" disabled="disabled" />
      					<label for="test7">Five</label>
					</div>
					<div class="col m4 s6">
						<input type="checkbox" id="test8" disabled="disabled" />
      					<label for="test8">Six</label>
					</div>
				</div>
			</div>
			

			<div class="col m5 s12">
				<h6>Selector de Fecha</h6>
				<input type="date" class="datepicker">
				<script>
				  $('.datepicker').pickadate({
				    selectMonths: true, // Creates a dropdown to control month
				    selectYears: 15 // Creates a dropdown of 15 years to control year
				  });
				</script>
			</div>

			<div class="col s12 file-field input-field">
				<h6>Adjuntar Archivos</h6>
				<div class="btn">
					<span>Adjunto</span>
					<input type="file" multiple>
				</div>
					<div class="file-path-wrapper">
					<input class="file-path validate" type="text" placeholder="Upload one or more files">
				</div>
			    
			</div>
			<div class="input-field col s12">
	            <textarea id="textarea1" class="materialize-textarea" data-length="140"></textarea>
	            <label for="textarea1">Textarea</label>
	        </div>
			<div class="col m3 s12"></div>
			<div class="col m3 s12"></div>
			<div class="col m3 s12"></div>

	      </div>	      
	      
	      
	    </fieldset>
    </form>
  
	
	<br>	
	<div class="col s12">
		<h5>Paginación</h5>		
		  <ul class="pagination">
		    <li class="disabled"><a href="#!"><i class="fa fa-angle-left"></i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="#!">2</a></li>
		    <li class="waves-effect"><a href="#!">3</a></li>
		    <li class="waves-effect"><a href="#!">4</a></li>
		    <li class="waves-effect"><a href="#!">5</a></li>
		    <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right"></i></a></li>
		  </ul>
	</div>
</div>
	

<footer class="page-footer">
          <div class="container">

         	 <ul class="menuFooter hide-on-small-only">
				<li><a href="#!">Inicio</a></li>
				<li><a href="#!">Compras</a></li>
				<li><a href="#!">Ventas</a></li>
				<li><a href="#!">Opciones</a></li>
				<li><a href="#!">Salir</a></li>
			</ul>
            <div class="row">
              <div class="col s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <i class="fa fa-creative-commons" aria-hidden="true"></i> 2017 INVEST 
            <a class="grey-text text-lighten-4 right" href="#!">www.google.co.ve</a>
            </div>
          </div>
        </footer>

<script>
	
	$( document ).ready(function(){
		$(".button-collapse").sideNav();	
	})
</script>
</body>
</html>