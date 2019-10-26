<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resturent;
class ResturentController extends Controller
{
    public function index(){
    	
    	$value = Resturent::all();
    	$markers = [];
        $infowindow = [];
        foreach($value as $value) {
          $markers[] = [
            $value->name, $value->latituted, $value->logituted
          ];          
          $infowindow[] = [
           "<div class=info_content><h3><a href='".url("food-item/".$value->id)."'>".$value->name."</a></h3><p>".$value->description."</p></div>"
          ];
        }
        $location['markers'] = json_encode($markers);
        $location['infowindow'] = json_encode($infowindow);
    	return view('user.find_resturent',$location);
    }
}
