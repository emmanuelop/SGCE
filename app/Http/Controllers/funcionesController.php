<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use Hash;
use Flash;
use Redirect;

use Auth;

use App\Http\Requests;

class funcionesController extends Controller
{
    public function index()
	{
		if (Auth::guest()){
			return view('inicio');
		}
		return redirect()->to("/home");       
	}


	/*
	public function iniciarSesion(Request $datos)
	{
		session_start();
        $usuario = Usuario::where('usuario', '=', $datos->input('usuario'))->first();
        if ($usuario != null && $usuario->password == $datos->input('password')){
            $_SESSION["username"] = $datos->input('usuario');

            $usuario = Usuario::where('usuario', '=', $_SESSION['username'])->first();
            return redirect()->to("/principal");
        }else{
            return redirect()->to("/login")->with('success-message', 'Usuario o Contraseña Incorrecto');
        }
	}

	public function registro()
	{
		return view('registro');
	}

	public function registrar(Request $datos){
        $usuario = $datos->input('usuario');
        $password = $datos->input('password');
        $correo_electronico = $datos->input('correo_electronico');
      
        $nuevo = new Usuario();
        $nuevo->usuario = $usuario;
        $nuevo->password = $password;
        $nuevo->correo_electronico = $correo_electronico;
        $nuevo->save();

        $empresa = new Empresa();
        $empresa->usuario = $usuario;
        $empresa->logo = "imagenes/logos/logo.jpg";
        $empresa->save();

        return view('login');
    }
	
	public function principal()
	{
        return view('principal');
	}

	public function perfil()
	{
		//Validar
		session_start();
        if (!isset($_SESSION['username']) ){
            return redirect()->to("/");
        }
        $usuario = Usuario::where('usuario', '=' , $_SESSION['username'])->first();
        $empresa = Empresa::where('usuario', '=' , $_SESSION['username'])->first();

        return view('perfil', compact('usuario', 'empresa'));
	}

	public function perfilGuardar(Request $datos)
	{
		session_start();
        if (!isset($_SESSION['username']) ){
            return redirect()->to("/");
        }
       
		$empresa = Empresa::where('usuario', '=' , $_SESSION['username'])->first();
		if ($datos->file('file') != null) {
			//Logo
			$file = $datos->file('file');
		    $nombre = "logo_" .$_SESSION['username']. "." . $file->getClientOriginalExtension();
		 	$path = public_path() . "/imagenes/logos/".$_SESSION['username']."/";
		 	$file->move($path, $nombre);

		 	$url_logo = "imagenes/logos/" .$_SESSION['username']. "/" .$nombre;
		}
		else{
			$url_logo = $datos->input('url_logo');
		}

	 	$empresa->logo = $url_logo;
		$empresa->nombre_empresa = $datos->input('nombre_empresa');
	 	$empresa->calle = $datos->input('calle');
		$empresa->colonia = $datos->input('colonia');
		$empresa->codigo_postal = $datos->input('codigo_postal');
		$empresa->delegacion = $datos->input('delegacion');
		$empresa->entidad_federativa = $datos->input('entidad_federativa');
		$empresa->telefono = $datos->input('telefono');
		$empresa->correo_electronico = $datos->input('correo_electronico');
		$empresa->mision = $datos->input('mision');
		$empresa->vision = $datos->input('vision');
		$empresa->rfc = $datos->input('rfc');
		$empresa->lugar_origen = $datos->input('lugar_origen');
		$empresa->fecha = $datos->input('fecha');
		$empresa->representante_legal = $datos->input('representante_legal');
		$empresa->servicios = $datos->input('servicios');

        $empresa->save();
		
		return redirect()->to("/perfil");

	}

	public function cerrarSesion()
	{
		session_start();
        unset($_SESSION['username'] ); //elimina variable de sesión
        unset($_COOKIE['username'] ); // elimina cookie de memoria
        unset($_COOKIE['password'] ); // elimina cookie de memoria
        setcookie("username", "", time() - 1); // expira cookie
        setcookie("password", "", time() - 1); // expira cookie
        return redirect()->to("/");
	}

	
	public function curriculumPDF()
	{
		//Validar
		session_start();
        if (!isset($_SESSION['username']) ){
            return redirect()->to("/");
        }
        $usuario = Usuario::where('usuario', '=' , $_SESSION['username'])->first();
        $empresa = Empresa::where('usuario', '=' , $_SESSION['username'])->first();

        $view=\View::make('curriculumPDF', compact('usuario', 'empresa'))->render();

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Curriculum_'.$empresa->nombre_empresa.'');
	}*/
}
	