<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Contact;
use App\Resturent;
use App\Item;

class LoginController extends Controller
{

    public function dashboard(){
        $data['totaluser'] = User::count(); 
        $data['totalcontact'] = Contact::count(); 
        $data['totalresturent'] = Resturent::count(); 
        $data['totalitem'] = Item::count(); 
        return view('admin.dashboard.dashboard',$data);
    }


    public function login(){
    	return view('admin.login');
    }

    public function authenticate(Request $request)
    {
    	
    	if(Auth::guard('admin')->attempt(['email' => trim($request['email']), 'password' => trim($request['password'])]))
        {
            return redirect()->intended('admin/dashboard'); 
        }
        else
        {
            return redirect('admin/login'); 
        }
    }

    public function showUser(){
        $data['user']=User::all();
        return view("admin.user.show",$data);

    }

     public function contact(){
        $data['user']=Contact::all();
        return view("admin.user.contact",$data);

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
