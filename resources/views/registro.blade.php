<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrapCelurean.css') }}" />
	<style>
		body{
			background: linear-gradient(to right, #1A9FB3, white);
		}
		.registro {
	        margin: 0px auto;
	      	float: initial;
	      	padding-top: 170px;
	    }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
		
	<div class="col-xs-6 registro">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Registro</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<form action="registrar" method="post">
						<input type="hidden" name="_token" value="{{{csrf_token()}}}">
							<div class="input-group" 5>
								<span class="input-group-addon glyphicon glyphicon-user" id="usuario"></span>
								<input type="text" name="usuario" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
							</div>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-lock" id="password"></span>
								<input type="password" name="password" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">
							</div>
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon2">@</span>
								<input type="text" name="correo_electronico" class="form-control" placeholder="Correo Electronico" aria-describedby="basic-addon2">
							</div>
							<button style="margin-top: 10px;" type="submit" class="btn btn-success pull-right">Registrar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


		</div>
	</div>
</body>
</html>