@extends('layouts.app')

@section('content-pag')
<main>
	<div class="row container inicioBotones">
		<div class="col m6 s12">
			<a href="compras">
				<div class="card-panel light-blue darken-3 center">
		        	<i class="white-text fa fa-cart-plus fa-5x" aria-hidden="true"></i>
		          	<h4 class="white-text">COMPRAS</h4>
		        </div>			
			</a>
		</div>
		<div class="col m6 s12">
			<a href="#!">
				<div class="card-panel light-green darken-3 center">
		    		<i class="white-text fa fa-money fa-5x" aria-hidden="true"></i>
		      		<h4 class="white-text">VENTAS</h4>
		        </div>			
			</a>
		</div>
		<div class="col m6 s12">
			<a href="#!">
				<div class="card-panel amber darken-3 center">
		          	<i class="white-text fa fa-bar-chart fa-5x" aria-hidden="true"></i>
		      		<h4 class="white-text">ESTADÍSTICAS</h4>
		        </div>			
			</a>
		</div>
		<div class="col m6 s12">
			<a href="#!">
				<div class="card-panel deep-purple darken-3 center">
		          	<i class="white-text fa fa-search fa-5x" aria-hidden="true"></i>
		      		<h4 class="white-text">CONSULTAS</h4>
		        </div>			
			</a>
		</div>
	</div>
</main>
@endsection