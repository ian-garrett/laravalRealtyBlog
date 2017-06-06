<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Request;

use App\Http\Requests;

use App\Http\Requests\CreateUserRequest;

use App\User;

// use Larabook\Forms\RegistrationForm;

class RegistrationController extends Controller
{

	// private $registrationForm;

	// function __construct(RegistrationForm $registrationForm)
	// {
	// 	$this->registrationForm = $registrationForm;
	// }


	public function create()
	{
		return view('registration.create');
	}

	public function store(CreateUserRequest $request)
	{
		
		//validation
		User::create($request->all());
		return Redirect::home();
	}

}
