<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Curriculum {{$empresa->nombre_empresa}}</title>
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
	<div class="col-xs-12 well">
		<div class="form-group" align="center">
			<img src="{{$empresa->logo}}" alt="" height="150" width="150"><br>
			<label for="" name="nombre_empresa" id="nombre_empresa" style="font-weight: bold; font-size: 24px;">{{$empresa->nombre_empresa}}</label>
		</div>

		<br>
		
		<label for="" class="seccion">Domicilio</label>
		<div class="form-group">
			<label for="" class="titulo">Calle:</label>
			<label for="" name="calle" id="calle">{{$empresa->calle}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Colonia:</label>
			<label for="" name="colonia" id="colonia">{{$empresa->colonia}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Código Postal:</label>
			<label for="" name="codigo_postal" id="codigo_postal">{{$empresa->codigo_postal}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Delegación:</label>
			<label for="" name="delegacion" id="delegacion">{{$empresa->delegacion}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Entidad Federativa:</label>
			<label for="" name="entidad_federativa" id="entidad_federativa">{{$empresa->entidad_federativa}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Teléfono:</label>
			<label for="" name="telefono" id="telefono">{{$empresa->telefono}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Correo Electrónico:</label>
			<label for="" name="correo_electronico" id="correo_electronico">{{$empresa->correo_electronico}}</label>
		</div>

		<br>	

		<div class="form-group">
			<label for="" class="seccion">Misión:</label><br>
			<label for="" name="mision" id="mision">{{$empresa->mision}}</label>
		</div><br>
		<div class="form-group">
			<label for="" class="seccion">Visión:</label><br>
			<label for="" name="vision" id="vision">{{$empresa->vision}}</label>
		</div>
		
		<br>

		<label for="" class="seccion">Perfil de la Empresa</label>
		<div class="form-group">
			<label for="" class="titulo">RFC:</label>
			<label for="" name="rfc" id="rfc">{{$empresa->rfc}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Lugar de Origen:</label>
			<label for="" name="lugar_origen" id="lugar_origen">{{$empresa->lugar_origen}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Fecha Fundación:</label>
			<label for="" name="fecha" id="fecha">{{$empresa->fecha}}</label>
		</div>
		<div class="form-group">
			<label for="" class="titulo">Representante Legal:</label>
			<label for="" name="representante_legal" id="representante_legal">{{$empresa->representante_legal}}</label
		</div>
		<div class="form-group">
			<label for="" class="titulo">Servicios que Ofrece:</label><br>
			<label for="" name="servicios" id="servicios">{{$empresa->servicios}}</label
		</div>
	</div>
</div>
</body>
</html>