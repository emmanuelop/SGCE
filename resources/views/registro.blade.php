<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-user" id="usuario"></span>
					<input type="text" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-lock" id="password"></span>
					<input type="text" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Correo Electronico" aria-describedby="basic-addon2">
  					<span class="input-group-addon" id="basic-addon2">@gmail.com</span>
				</div>
				<a href="{{url('/master')}}"><button type="button" class="btn btn-default">Guardar</button></a>
			</div>
		</div>
	</div>
</body>
</html>