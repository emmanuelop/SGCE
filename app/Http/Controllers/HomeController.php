<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;
use App\Empresa;
use Hash;
use Flash;
use Redirect;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        return view('home');
    }

    /*public function principal()
    {
        return view('principal');
    }*/

    public function perfil()
    {
        /*//Validar
        session_start();
        if (!isset($_SESSION['username']) ){
            return redirect()->to("/");
        }
        $usuario = Usuario::where('usuario', '=' , $_SESSION['username'])->first();
        $empresa = Empresa::where('usuario', '=' , $_SESSION['username'])->first();

        return view('perfil', compact('usuario', 'empresa'));*/


        $empresa = Empresa::where('usuario', '=' , Auth::user()->name)->first();

        return view('perfil', compact('empresa'));
    }

    public function perfilGuardar(Request $datos)
    {      
        $empresa = Empresa::where('usuario', '=' , Auth::user()->name)->first();

        if ($datos->file('file') != null) {
            //Logo
            $file = $datos->file('file');
            $nombre = "logo_" .Auth::user()->name. "." . $file->getClientOriginalExtension();
            $path = public_path() . "/imagenes/logos/".Auth::user()->name."/";
            $file->move($path, $nombre);

            $url_logo = "imagenes/logos/" .Auth::user()->name. "/" .$nombre;
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
    
    public function curriculumPDF()
    {
        $empresa = Empresa::where('usuario', '=' , Auth::user()->name)->first();

        $view=\View::make('curriculumPDF', compact('usuario', 'empresa'))->render();

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Curriculum_'.$empresa->nombre_empresa.'');
    }

    public function paginaWeb()
    {
        $empresa = Empresa::where('usuario', '=' , Auth::user()->name)->first();
        return view('paginaWeb', compact('empresa'));
    }

}
