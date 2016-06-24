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
	        background: linear-gradient(#1A9FB3, white);
	    }
	    html,body{
	      	height: 100%;
	      	margin: 0px;
	    }
	</style>

	<!--<script>
		function editar(){
			
			document.getElementById('logo').disabled=false;
			document.getElementById('logo').style.visibility= 'visible';
			document.getElementById('logo').style.display= 'initial';
			document.getElementById('nombre_empresa').disabled=false;
			document.getElementById('calle').disabled=false;
			document.getElementById('colonia').disabled=false;
			document.getElementById('codigo_postal').disabled=false;
			document.getElementById('delegacion').disabled=false;
			document.getElementById('entidad_federativa').disabled=false;
			document.getElementById('telefono').disabled=false;
			document.getElementById('correo_electronico').disabled=false;
			document.getElementById('mision').disabled=false;
			document.getElementById('vision').disabled=false;
			document.getElementById('rfc').disabled=false;
			document.getElementById('lugar_origen').disabled=false;
			document.getElementById('fecha').disabled=false;
			document.getElementById('representante_legal').disabled=false;
			document.getElementById('servicios').disabled=false;

			document.getElementById('guardar').disabled=false;
			document.getElementById('guardar').style.visibility= 'visible';

			document.getElementById('editarPerfil').disabled=true;
			document.getElementById('editarPerfil').style.visibility= 'hidden';
		} 
	</script>-->
</head>
<body>
	<!--Menú-->
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

             	<a class="navbar-brand" style="background: transparent; font-weight: bold; font-size: 18px;">Bienvenido a SGCE {{ Auth::user()->name }}</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/home')}}">Inicio</a></li>
		        	<li><a href="{{url('/perfil')}}">Perfil</a></li>
		        	<li><a target="_blank" href="{{url('/curriculumPDF')}}">Imprimir Curriculum</a></li>
		        	<li><a target="_blank" href="{{url('/paginaWeb')}}{{ Auth::user()->name }}">Generar Pagina Web</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                	<li><a href="{{url('/logout')}}">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="container">
		<div class="row">
			@yield('home')
			@yield('perfil')
		</div>	
	</div>
</body>
</html>