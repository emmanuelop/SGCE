<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Empresa;

use App\Http\Requests;

class funcionesController extends Controller
{
    public function index()
	{
		return view('inicio');
	}

	public function login()
	{
		return view('login');
	}

	public function iniciarSesion()
	{
		return view('principal');
	}

	public function registro()
	{
		return view('registro');
	}

	public function registrar(Request $datos){
        $usuario=$datos->input('usuario');
        $password=$datos->input('password');
        $correo_electronico=$datos->input('correo_electronico');
      
        $nuevo= new Usuario();
        $nuevo->usuario=$usuario;
        $nuevo->password=$password;
        $nuevo->correo_electronico=$correo_electronico;
        $nuevo->save();

        return view('login');
    }
	
	public function principal()
	{
		return view('principal');
	}

	public function perfil()
	{
		return view('perfil');
	}

	public function perfilGuardar()
	{
		return view('perfil');
	}

	public function cerrarSesion()
	{
		return view('inicio');
	}
}
