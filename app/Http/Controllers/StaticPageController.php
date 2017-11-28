<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Session;
use Mail;

class StaticPageController extends Controller
{
    
	public function getHome()
	{
		return view('website.home');
	}

	public function getAbout()
	{
		$firstName = 'Renan';
		$lastName = 'Graciano';

		$fullName = $firstName . ' ' . $lastName;
		$email = 'rfcgraciano@gmail.com';

		return view('website.about', compact('fullName', 'email'));
	}

	public function getContact()
	{
		return view('website.contact');
	}

	public function postContact(Request $request)
	{
		$fields = $request->validate([
			'name' => 'required|between:3,50',
			'email' => 'required|email|between:5,50',
			'phone' => 'required|numeric',
			'bodyMessage' => 'required|min:5'
		]);
		
		Mail::to('rfcgraciano@gmail.com')->send(new ContactMail($fields));

		Session::flash('success', 'Obrigado! Email enviado com sucesso!');
		return redirect()->route('contact');
	}

}
