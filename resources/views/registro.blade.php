<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrapCelurean.css') }}" />
	<script type="text/javascript" src="{{ asset('js/jquery1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/validacion.js') }}"></script>
	<style>
		body{
	        background: linear-gradient(#1A9FB3, white);
	    }
	    html,body{
	      	height: 100%;
	      	margin: 0px;
	    }
		.registro {
	        margin: 0px auto;
	      	float: initial;
	      	padding-top: 170px;
	    }
	</style>
</head>
<body>
<div class="col-xs-12">
	<nav>
		<ul class="pager">
			<li class="previous"><a href="{{url('/login')}}"><span aria-hidden="true" class="glyphicon glyphicon-arrow-left"></span> Atras</a></li>
		</ul>
	</nav>
</div>

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
										<span class="input-group-addon glyphicon glyphicon-user"></span>
										<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2" onblur="compararUsuario
										()">
										<span class="input-group-addon" id="validarUser" style="display: none; background: transparent; color: #f52020;font-weight: bold;"></span>
									</div>
									<div class="input-group">
										<span class="input-group-addon glyphicon glyphicon-lock"></span>
										<input type="password"  id="password" name="password" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">
									</div>
									<div class="input-group">
										<span class="input-group-addon">@</span>
										<input type="text" id="correo_electronico" name="correo_electronico" class="form-control" placeholder="Correo Electronico" aria-describedby="basic-addon2" onblur="compararCorreo()">
										<span class="input-group-addon" id="validarCorreo" style="display: none; background: transparent; color: #f52020;font-weight: bold;"></span>
									</div>
									<button disabled="true" style="margin-top: 10px;" id="registrar" type="submit" class="btn btn-success pull-right">Registrar</button>
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