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
}
