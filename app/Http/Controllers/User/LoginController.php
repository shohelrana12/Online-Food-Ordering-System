<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function index(){
    	return view('user.login');
    }

    public function dashboard(){
    	return view('user');
    }

    public function authenticate(Request $request)
    {
    	
    	if(Auth::guard('users')->attempt(['email' => trim($request['email']), 'password' => trim($request['password'])]))
        {
            return redirect()->intended('home'); 
        }
        else
        {
            return redirect('login'); 
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
