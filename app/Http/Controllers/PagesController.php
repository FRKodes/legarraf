<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('pages.index');
	}

	public function acercade(){
		return view('pages.acerca-de');	
	}

	public function sucursales(){
		return view('pages.sucursales');	
	}

	public function productos(){
		return view('pages.productos');	
	}

	public function garrafon(){
		return view('pages.garrafon');	
	}

}
