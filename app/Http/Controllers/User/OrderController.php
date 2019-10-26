<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
class OrderController extends Controller
{
    public function index(Request $request){
        
    	$order = new Order();
    	$order->item_id = json_encode($request->item);
    	$order->user_id = $request->user;
    	$order->quantity = '1';
    	$order->price = $request->totalprice;
    	$order->status = 0;
    	$order->save();
		$data['order'] = $order;
    	return view('user.order',$data);   

    	
    }

    public function confirm(Request $request){

        
		$order = Order::find($request->orderid);
        $order->status = 1;
        $order->location = $request->location;
        $order->save();
		return redirect('home');	
    }
}
