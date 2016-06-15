@extends('principal')

@section('editarPerfil')
<div class="col-xs-12 well">
	<form action="save" method="post">
		<div class="form-group">
			<label for="">Logo:</label>
			
			<input type="file" class="form-control" name="file">
		</div>
		<div class="form-group">
			<label for="">Nombre de la Empresa:</label>
			<input type="text" name="empresa" class="form-control" placeholder="">
		</div>
		<label for="">Domicilio</label>
		<div class="form-group">
			<label for="">Calle:</label>
			<input type="text" name="calle" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Colonia:</label>
			<input type="text" name="colonia" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Código Postal:</label>
			<input type="text" name="codigo_postal" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Delegación:</label>
			<input type="text" name="delegacion" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Entidad Federativa:</label>
			<input type="text" name="entidad_federativa" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Teléfono:</label>
			<input type="text" name="telefono" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Correo Electrónico:</label>
			<input type="text" name="correo_electronico" class="form-control" placeholder="">
		</div>

		<div class="form-group">
			<label for="">Misión</label><br>
			<textarea name="mision" cols="70" rows="8"></textarea>
		</div>
		<div class="form-group">
			<label for="">Visión</label><br>
			<textarea name="vision" cols="70" rows="8"></textarea>
		</div>

		<label for="">Perfil de la Empresa</label>
		<div class="form-group">
			<label for="">RFC:</label>
			<input type="text" name="rfc" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Lugar de Origen:</label>
			<input type="text" name="lugar_origen" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Fecha:</label>
			<input type="date" name="fecha" class="form-control" placeholder="">
		</div>
		<div class="form-group">
			<label for="">Representante Legal:</label>
			<input type="text" name="representante_legal" class="form-control" placeholder="">
		</div>

		<div class="form-group">
			<label for="">Servicios que Ofrece:</label>
			<input type="text" name="servicios" class="form-control" placeholder="">
		</div>

		<button type="submit" class="btn btn-success pull-right">Guardar</button>
	</form>
</div>
@stop