<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SGCE</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="{{ asset('css/bootstrapCelurean.css') }}" />
	<style>
		body{
			background: linear-gradient(to right, #1A9FB3, white);
		}
	</style>
</head>
<body>
	<!--Menú-->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

	      <a class="navbar-brand" href="{{url('/principal')}}">Sistema Generador de Curriculum Empresarial</a>
	    </div>

	    <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-1" aria-expanded="true">
	    	<ul class="nav navbar-nav">
	        	<li><a href="{{url('/perfil')}}">Perfil</a></li>
	      	</ul>
	     	      	
	      	<ul class="nav navbar-nav navbar-right">
	        	<li><a href="{{url('/cerrarSesion')}}">Cerrar Sesión</a></li>
	      	</ul>
	    </div>
	  </div>
	</nav>


	<div class="container">
		<div class="row">
			@yield('perfil')
			@yield('editarPerfil')
		</div>	
	</div>
</body>
</html>