<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INVEST</title>
 	
    <!-- Styles -->
	<link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('/css/materialize.min.css') }}">
	<link rel="stylesheet" href="{{ url('/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/DataTables/datatables.min.css') }}"/>

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{ url('/js/materialize.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('/DataTables/datatables.min.js') }}"></script>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>

<body>

@yield('style')

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

				@if (Auth::guest())
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Registrar</a></li>
                @else
                	<li><a href="#!">{{ Auth::user()->name }} <span class="caret"></span></a>
					<ul class="">
						<li>
							<a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
					</ul>
				</li>
                @endif

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

				@if (Auth::guest())
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Registrar</a></li>
                @else
                	<li><a href="#!">{{ Auth::user()->name }} <span class="caret"></span></a>
					<ul class="">
						<li>
							<a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
					</ul>
				</li>
                @endif

				<li><a href="#!">Salir</a></li>
		    </ul>
		</div>
	</nav>
</header>

	@yield('content-pag')
<br>	

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

@yield('script')

</body>
</html>