@extends('principal')

@section('perfil')
<div class="col-xs-12">
	<a href="{{url('/editarPerfil')}}"><button type="button" class="btn btn-primary pull-right">Editar Perfil</button></a>
</div>
<div class="col-xs-12 well">
	<div class="form-group">
		<label for="">Logo:</label>
	</div>
	<div class="form-group">
		<label for="">Nombre de la Empresa:</label>
	</div>

	<label for="">Domicilio</label>
	<div class="form-group">
		<label for="">Calle:</label>
	</div>
	<div class="form-group">
		<label for="">Colonia:</label>
	</div>
	<div class="form-group">
		<label for="">Código Postal:</label>
	</div>
	<div class="form-group">
		<label for="">Delegación:</label>
	</div>
	<div class="form-group">
		<label for="">Entidad Federativa:</label>
	</div>
	<div class="form-group">
		<label for="">Teléfono:</label>
	</div>
	<div class="form-group">
		<label for="">Correo Electrónico:</label>
	</div>

	<div class="form-group">
		<label for="">Misión</label><br>
	</div>
	<div class="form-group">
		<label for="">Visión</label><br>
	</div>

	<label for="">Perfil de la Empresa</label>
	<div class="form-group">
		<label for="">RFC:</label>
	</div>
	<div class="form-group">
		<label for="">Lugar de Origen:</label>
	</div>
	<div class="form-group">
		<label for="">Fecha:</label>
	</div>
	<div class="form-group">
		<label for="">Representante Legal:</label>
	</div>
		<div class="form-group">
		<label for="">Servicios que Ofrece:</label>
	</div>
</div>
@stop