<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resturent;
class ResturentController extends Controller
{
    public function index(){
        $data['resturent']= Resturent::all();
		return view("admin.resturent.show",$data);
    }

    public function store(Request $request){
    	if(!$_POST){
    		return view("admin.resturent.add");

    	}else{
    		Resturent::create($request->all());
    		return redirect("admin/resturent");

    	}
    	
    }


}
