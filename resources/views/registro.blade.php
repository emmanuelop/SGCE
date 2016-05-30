<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
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
			<div class="col-xs-12">
			<form action="registrar" method="post">
				<div class="input-group">
					<span class="input-group-addon glyphicon  glyphicon-font" id="nombre"></span>
					<input type="text" class="form-control" placeholder="Nombre" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-user" id="usuario"></span>
					<input type="text" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon glyphicon glyphicon-lock" id="password"></span>
					<input type="text" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">
				</div>
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon2">@</span>
					<input type="text" class="form-control" placeholder="Correo Electronico" aria-describedby="basic-addon2">
				</div>
				<button type="submit" class="btn btn-success">Registrar</button>
			<form>
			</div>
		</div>
	</div>
</body>
</html>