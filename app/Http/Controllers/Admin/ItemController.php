<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Resturent;
class ItemController extends Controller
{

	public function index(){
        $data['item']= Item::all();
		return view("admin.item.show",$data);
    }

    public function store(Request $request){
    	if(!$_POST){
			$data['resturent'] = Resturent::all('id','name');
    		return view("admin.item.add",$data);

    	}else{
    		Item::create($request->all());
    		return redirect("admin/item");
    	}
    	
    }
}
