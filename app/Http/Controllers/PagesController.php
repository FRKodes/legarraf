<?php namespace App\Http\Controllers;

use Mail;

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

	public function eventos(){
		return view('pages.eventos');	
	}
	
	public function sendmail2(Request $request){

		$email = $request->input('email');
		Mail::send('emails.cotizacion', [], function($message){
			$message->to('legarraf@outlook.com', 'frkalderon@gmail.com')->subject('Cotización para evento LE GARRAF');
		});
		
		/*
		CONFIRMATION EMAIL
		 */
		$data = array( 'email' => $email );
		Mail::later(5, 'emails.confirmacion', $data, function ($message) use ($data) {
			$message->to($data['email'])->subject('Cotización para evento LE GARRAF');
		});

	}

}