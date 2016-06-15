@extends('principal')

@section('perfil')
<div class="col-xs-12">
	<button type="button" id="editarPerfil" onclick="editar();" class="btn btn-primary pull-right">Editar Perfil</button>
</div>
<div class="col-xs-12 well">
	<form action="perfilGuardar" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{{csrf_token()}}}">
		<div class="form-group">
			<input type="text" name="url_logo" value="{{$empresa->logo}}" style="visibility: hidden; display: none;" >
			<label for="">Logo:</label><br>
			<img src="{{$empresa->logo}}" alt="" height="150" width="150">
			<input type="file" class="form-control" id="logo" name="file" disabled="true" style="visibility: hidden; display: none;" value="{{$empresa->logo}}">
        </div>
		<div class="form-group">
			<label for="">Nombre de la Empresa:</label>
			<input type="text" disabled="true" name="nombre_empresa" id="nombre_empresa" class="form-control" value="{{$empresa->nombre_empresa}}">
		</div>
		<label for="">Domicilio</label>
		<div class="form-group">
			<label for="">Calle:</label>
			<input type="text" disabled="true" name="calle" id="calle" class="form-control" value="{{$empresa->calle}}">
		</div>
		<div class="form-group">
			<label for="">Colonia:</label>
			<input type="text" disabled="true" name="colonia" id="colonia" class="form-control" value="{{$empresa->colonia}}">
		</div>
		<div class="form-group">
			<label for="">Código Postal:</label>
			<input type="text" disabled="true" name="codigo_postal" id="codigo_postal" class="form-control" maxlength="5" value="{{$empresa->codigo_postal}}">
		</div>
		<div class="form-group">
			<label for="">Delegación:</label>
			<input type="text" disabled="true" name="delegacion" id="delegacion" class="form-control" value="{{$empresa->delegacion}}">
		</div>
		<div class="form-group">
			<label for="">Entidad Federativa:</label>
			<input type="text" disabled="true" name="entidad_federativa" id=entidad_federativa class="form-control" value="{{$empresa->entidad_federativa}}">
		</div>
		<div class="form-group">
			<label for="">Teléfono:</label>
			<input type="text" disabled="true" name="telefono" id="telefono" class="form-control" maxlength="10" placeholder="6677112233" value="{{$empresa->telefono}}">
		</div>
		<div class="form-group">
			<label for="">Correo Electrónico:</label>
			<input type="text" disabled="true" name="correo_electronico" id="correo_electronico" class="form-control" value="{{$empresa->correo_electronico}}">
		</div>

		<div class="form-group">
			<label for="">Misión</label><br>
			<textarea disabled="true" name="mision" id="mision" cols="70" rows="8" maxlength="1000">{{$empresa->mision}}</textarea>
		</div>
		<div class="form-group">
			<label for="">Visión</label><br>
			<textarea disabled="true" name="vision" id="vision" cols="70" rows="8" maxlength="1000">{{$empresa->vision}}</textarea>
		</div>

		<label for="">Perfil de la Empresa</label>
		<div class="form-group">
			<label for="">RFC:</label>
			<input disabled="true" type="text" name="rfc" id="rfc" class="form-control" maxlength="13" placeholder="ABCD123456789" value="{{$empresa->rfc}}">
		</div>
		<div class="form-group">
			<label for="">Lugar de Origen:</label>
			<input disabled="true" type="text" name="lugar_origen" id="lugar_origen" class="form-control" value="{{$empresa->lugar_origen}}">
		</div>
		<div class="form-group">
			<label for="">Fecha Fundación:</label>
			<input disabled="true" type="date" name="fecha" id="fecha" class="form-control" value="{{$empresa->fecha}}">
		</div>
		<div class="form-group">
			<label for="">Representante Legal:</label>
			<input disabled="true" type="text" name="representante_legal" id="representante_legal" class="form-control" value="{{$empresa->representante_legal}}">
		</div>

		<div class="form-group">
			<label for="">Servicios que Ofrece:</label><br>
			<textarea disabled="true" name="servicios" id="servicios" cols="70" rows="8" maxlength="500">{{$empresa->servicios}}</textarea>
		</div>

		<button disabled="true" style="visibility: hidden;" type="submit" id="guardar" class="btn btn-success pull-right">Guardar</button>
	</form>
</div>
@stop