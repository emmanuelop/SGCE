<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SGCE</title>
	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}" />
</head>
<body>
	<!--Menú-->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <div class="navbar-header">
		    	<a class="navbar-brand" href="{{url('/')}}">Sistema Generador de Curriculum Empresarial</a>
		       	<a href="{{url('/login')}}"><button type="button" class="btn btn-default navbar-toggle collapsed">Entrar</button></a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        	<a href="{{url('/login')}}"><button type="button" class="btn btn-default navbar-btn navbar-right">Entrar</button></a>
    		</div>
 		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="jumbotron">
  					<h1>Bienvenido a SGCE</h1>
  					<p>	Tell me why
						wae mami mami jakku heundeullini
						nan yeogi yeogi ne yeope itjanhni
						jeonsin charyeo Lion heart
						nan aega ta
						nae mami mami deoneun sikji anhge
						nan yeogijeogi ttwinoneun neoui mam
						gildeurillae Lion heart... (=^.^=)</p>
  					<p><a class="btn btn-primary btn-lg" href="{{url('/login')}}" role="button">Empezar!</a></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>