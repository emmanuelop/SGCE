@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 login">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Iniciar Sesión</h3>
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-sm-8">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="margin-top: -10px;">
                                <label for="email" class="control-label">Correo Electrónico</label>
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Contraseña</label>
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 0px;">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 0px;">
                                <div class="col-md-6 col-md-offset-6">
                                    <button type="submit" class="btn btn-success pull-right">
                                        <i class="fa fa-btn fa-sign-in"></i> Iniciar Sesión
                                    </button>
                                </div>
                            </div>

                            <div class="form-group" style="margin-bottom: 0px;">
                                <div class="col-md-5 col-md-offset-6 pull-right">
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste Tu Contraseña?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xs-12 col-sm-4" style="border-left:1px solid #ccc; height:180px; margin-top: 30px;">
                        <a href="{{ url('/register') }}"><button type="button" style="margin-top: 60px;" class="btn btn-info btn-lg center-block">Registrarse</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
