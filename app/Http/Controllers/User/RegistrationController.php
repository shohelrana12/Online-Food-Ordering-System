<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class RegistrationController extends Controller
{
   public function index(){
    	return view('user.register');
   }


   public function signup(Request $request){
		$user = User::create($request->all());
		return redirect('login');
   }
}
