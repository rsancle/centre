<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrator;

class ControlController extends Controller
{
    public function getLogein(Request $request)
	{
		$name = $request->input('name_user');
		$password = $request->input('password_user');
		$admin = Administrator::where('name', $name)->where('password', $password)->first();
	
		if ($admin) 
		{
			session()->put(['object'=> $admin]);
			session()->put('role','admin');
			return view('admin_dashboard');
		}
		else
		{
			return redirect('admin/login')->with('message', '¡Usuari incorrecte!');
		}	
	}
}
