<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

	public function registrar(){
 
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

	public function editarPerfil()
	{
		return view('editarPerfil');
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
