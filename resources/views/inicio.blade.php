<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SGCE</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrapCelurean.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
	<style>
	    body{
	        background: linear-gradient(#1A9FB3, white);
	    }
	    html,body{
	      	height: 100%;
	      	margin: 0px;
	    }
	    .box{
	    	padding-left: 60px;
	      	padding-right: 60px;
	      	border-radius: 6px;
	      	padding-top: 30px;
	      	padding-bottom: 48px;
	      	margin-bottom: 30px;
	      	width: 100%;
	      	height: 350px;
	    }
	    .vid-container {
	    	height: 380px;
	    }
	    .inner-container {
	    	width: 80%;
	    	height: 350px;
	    	top: 5%;
	     	left: 10%;
	      	right: 10%;
	    }

	    @keyframes square {
	      	100%   { transform: translateY(0); }
	      	30% { transform: translateY(-850px) rotate(6000deg); }
	    }
	</style>
</head>
<body>
	<!--Menú-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		    <div class="navbar-header">
		    	<a class="navbar-brand" href="{{url('/')}}" style="font-weight: bold; font-size: 20px;">Sistema Generador de Curriculum Empresarial</a>
		       	<a href="{{url('/home')}}"><button type="button" class="btn btn-default navbar-toggle collapsed">Entrar</button></a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        	<a href="{{url('/home')}}"><button type="button" class="btn btn-default navbar-btn navbar-right">Entrar</button></a>
    		</div>
 		</div>
	</nav>
		
	<div class="vid-container">
	    <div class="bgvid back">
		    <ul class="bg-bubbles">
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
		        <li></li>
			    <li></li>
		    </ul>
    	</div>
	    <div class="inner-container">
	      	<div class="bgvid inner">
		        <ul class="bg-bubbles">
			        <li></li>
			        <li></li>
			        <li></li>
			        <li></li>
			        <li></li>
			        <li></li>
			        <li></li>
			        <li></li>
			        <li></li>
		        </ul>
	     	</div>
	      	<div class="box">
	        	<h1 style="font-weight: bold; font-size: 60px;">Bienvenido a SGCE</h1>
	        	<h1 style="font-size: 20px; color: #FFFFFF">La mejor opción para ti</h1>
	        	<p><a class="btn btn-primary btn-lg" href="{{url('/home')}}" role="button">Empezar !</a></p>
	      	</div>
		</div>
	</div>

</body>
</html>