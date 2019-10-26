<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
class ItemController extends Controller
{

   public function index($id = null){
	   	if($id){
	   		$data['item']=Item::find($id)->all();
	    	return view('user.items',$data);
	   	}else{
	   		$data['item']=Item::all();
	    	return view('user.items',$data);
	   	}
   		
   }
}
