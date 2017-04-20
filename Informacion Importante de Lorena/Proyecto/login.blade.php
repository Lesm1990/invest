<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>INVEST</title>


	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/materialize.min.js"></script>



</head>
<body>

<header>
	<nav>
		<div class="nav-wrapper container">
			<a href="#!" class="brand-logo center">
				<i class="fa fa-cubes" aria-hidden="true"></i>
				<span style="color:#fff;">INVEST</span>
			</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</a>
			
		</div>
	</nav>
</header>


<main class="valign-wrapper">
	<div class="row container autenticacion">
		<div class="col s12 center">
			<h4>INICIO DE SESIÓN</h4>
		</div>
		
	    <form class="col s6 offset-s3">
	    	
		      <div class="row">

		        <div class="input-field col l12 m12 s12">
		          <input id="email" type="email" class="validate" value="r.betzabeth@gmail.com">
		          <label class="active" for="email" data-error="Escriba un e-mail correctamente" data-success="válido">Email</label>
		        </div>

		        <div class="input-field col l12 m12 s12">
		          <input id="password" type="password" class="validate" value="betza28">
		          <label class="active" for="password">Password</label>
		        </div>

			
		     
		      </div>	      
		      
	    </form>
	    	<div class="row">
	    		<div class="col l12 m12 s12 center">
					<button class="btn waves-effect waves-light " type="submit" name="action" id="ingresar" onclick="window.location='/index'">ENTRAR
					    <i class="fa fa-paper-plane-o left"></i>
					</button>
				</div>
			</div>
	</div>
		
</main>
</body>
</html>