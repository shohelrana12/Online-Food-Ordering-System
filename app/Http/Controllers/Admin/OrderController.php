<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
class OrderController extends Controller
{
    public function index(){
        $data['order']= Order::all();
		return view("admin.order.show",$data);
    }
}
