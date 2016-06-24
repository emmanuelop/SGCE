<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pagina Web {{$empresa->nombre_empresa}}</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		.seccion{
			
			font-style: oblique;
			font-weight: bold;
			font-size: 16px;
		}
		.titulo{
			font-weight: bold;
		}

	</style>
</head>
<body>
<div class="container">
    <div class="row">
	<div class="col-xs-12">
		<br>
		<div class="form-group" align="center">
			<img src="{{$empresa->logo}}" alt="" height="150" width="150"><br>
			<label for="" name="nombre_empresa" id="nombre_empresa" style="font-weight: bold; font-size: 24px;">{{$empresa->nombre_empresa}}</label>
		</div>
		
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Domicilio</h3>
            </div>
            <div class="panel-body">
				<div class="form-group">
					<label for="" class="titulo">Calle:</label> {{$empresa->calle}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Colonia:</label> {{$empresa->colonia}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Código Postal:</label> {{$empresa->codigo_postal}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Delegación:</label> {{$empresa->delegacion}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Entidad Federativa:</label> {{$empresa->entidad_federativa}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Teléfono:</label> {{$empresa->telefono}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Correo Electrónico:</label> {{$empresa->correo_electronico}}
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Misión</h3>
            </div>
            <div class="panel-body">
				<div class="form-group">
					{{$empresa->mision}}
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Visión</h3>
            </div>
            <div class="panel-body">
				<div class="form-group">
					{{$empresa->vision}}
				</div>
			</div>
		</div>

		<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Perfil de la Empresa</h3>
            </div>
            <div class="panel-body">
				<div class="form-group">
					<label for="" class="titulo">RFC:</label> {{$empresa->rfc}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Lugar de Origen:</label> {{$empresa->lugar_origen}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Fecha Fundación:</label> {{$empresa->fecha}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Representante Legal:</label> {{$empresa->representante_legal}}
				</div>
				<div class="form-group">
					<label for="" class="titulo">Servicios que Ofrece:</label><br>
					{{$empresa->servicios}}
				</div>
			</div>
		</div>
	
	</div>
	</div>
</div>
</body>
</html>