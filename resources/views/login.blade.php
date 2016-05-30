<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrapCelurean.css') }}" />
	<style>
		body{
			background: linear-gradient(to right, yellow, white);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-user" id="usuario"></span>
					<input type="text" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-lock" id="password"></span>
					<input type="text" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">
				</div>
				<a href="{{url('/iniciarSesion')}}"><button type="button" class="btn btn-success pull-right">Iniciar Sesión</button></a>
			</div>
			
			<div class="col-xs-6">
				<a href="{{url('/registro')}}"><button type="button" class="btn btn-info btn-lg center-block">Registrarse</button></a>
			</div>
		</div>



		<div class="col-xs-6">
			<div class="jumbotron">
  				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-user" id="usuario"></span>
					<input type="text" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-lock" id="password"></span>
					<input type="text" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">
				</div>
				<a href="{{url('/iniciarSesion')}}"><button type="button" class="btn btn-success pull-right">Iniciar Sesión</button></a>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="jumbotron">
  				<a href="{{url('/registro')}}"><button type="button" class="btn btn-info btn-lg center-block">Registrarse</button></a>
			</div>
		</div>
	</div>
</body>
</html>