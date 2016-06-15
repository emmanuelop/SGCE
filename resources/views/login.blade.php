<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrapCelurean.css') }}" />
	<style>
		body{
	        background: linear-gradient(#1A9FB3, white);
	    }
	    html,body{
	      	height: 100%;
	      	margin: 0px;
	    }
	    .login {
	        margin: 0px auto;
	      	float: initial;
	      	padding-top: 170px;
	      	
	    }
	    .abajo{
	    	margin-bottom: -17px;
	    }
	    a:link{
	    	text-decoration: none;
	    }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			

	<div class="col-xs-6 login">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Iniciar Sesión</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-8 abajo" style="border-bottom:1px solid #ccc;height:160px">
						<form action="iniciarSesion">
							<div class="input-group" style="margin-top: 13px;">
								<span class="input-group-addon glyphicon glyphicon-user" id="usuario"></span>
								<input type="text" name="usuario" class="form-control" placeholder="Usuario" aria-describedby="sizing-addon2">
							</div>
							<div class="input-group">
								<span class="input-group-addon glyphicon glyphicon-lock" id="password"></span>
								<input type="password" name="password" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon2">
							</div>
							@if (Session::has('success-message'))
		                    <div class="input-group input-group-lg" style="float: right; margin-top: 10px;">
		                        <span class="input-group-addon glyphicon glyphicon-remove alert-danger" style="font-size: 12px;font-weight: bold;background: #ff7b7b;height: 0px;border-radius: 10px;">{{ Session::get('success-message') }}</span>
		                        <button type="submit" class="btn btn-success pull-right">Iniciar Sesión</button>
		                        </div>
		                    @else
		                        <button style="margin-top: 10px;" type="submit" class="btn btn-success pull-right">Iniciar Sesión</button>
		                    @endif
						</form>
					</div>
					<div class="col-xs-12 col-sm-4 abajo" style="border-left:1px solid #ccc;height:120px">
						<a href="{{url('/registro')}}"><button type="button" style="margin-top: 25px;" class="btn btn-info btn-lg center-block">Registrarse</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>