@extends('principal')

@section('perfil')
<div class="col-xs-12">
	<button type="button" id="editarPerfil" onclick="editar();" class="btn btn-primary pull-right">Editar Perfil</button>
</div>
<div class="col-xs-12 well">
	<form action="perfilGuardar" method="post">
		<input type="hidden" name="_token" value="{{{csrf_token()}}}">
		<div class="form-group">
			<label for="">Logo:</label>
			
		</div>
		<div class="form-group">
			<label for="">Nombre de la Empresa:</label>
			<input type="text" disabled="true" name="empresa" id="empresa" class="form-control">
		</div>
		<label for="">Domicilio</label>
		<div class="form-group">
			<label for="">Calle:</label>
			<input type="text" disabled="true" name="calle" id="calle" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Colonia:</label>
			<input type="text" disabled="true" name="colonia" id="colonia" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Código Postal:</label>
			<input type="text" disabled="true" name="codigo_postal" id="codigo_postal" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Delegación:</label>
			<input type="text" disabled="true" name="delegacion" id="delegacion" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Entidad Federativa:</label>
			<input type="text" disabled="true" name="entidad_federativa" id=entidad_federativa class="form-control">
		</div>
		<div class="form-group">
			<label for="">Teléfono:</label>
			<input type="text" disabled="true" name="telefono" id="telefono" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Correo Electrónico:</label>
			<input type="text" disabled="true" name="correo_electronico" id="correo_electronico" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Misión</label><br>
			<textarea disabled="true" name="mision" id="mision" cols="70" rows="8"></textarea>
		</div>
		<div class="form-group">
			<label for="">Visión</label><br>
			<textarea disabled="true" name="vision" id="vision" cols="70" rows="8"></textarea>
		</div>

		<label for="">Perfil de la Empresa</label>
		<div class="form-group">
			<label for="">RFC:</label>
			<input disabled="true" type="text" name="rfc" id="rfc" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Lugar de Origen:</label>
			<input disabled="true" type="text" name="lugar_origen" id="lugar_origen" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Fecha:</label>
			<input disabled="true" type="date" name="fecha" id="fecha" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Representante Legal:</label>
			<input disabled="true" type="text" name="representante_legal" id="representante_legal" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Servicios que Ofrece:</label>
			<input disabled="true" type="text" name="servicios" id="servicios" class="form-control">
		</div>

		<button disabled="true" style="visibility: hidden;" type="submit" id="guardar" class="btn btn-success pull-right">Guardar</button>
	</form>
</div>
@stop