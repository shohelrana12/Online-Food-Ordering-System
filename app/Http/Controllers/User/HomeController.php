<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
class HomeController extends Controller
{
    public function index(){
    	return view('user.frontpage');
    }

    public function contact(){
    	return view('user.contact');
    }

    public function about(){
    	return view('user.about');
    }


    public function contactUs(Request $request){
		$user = Contact::create($request->all());
    	return redirect('home');
    }



}
