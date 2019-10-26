<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Resturent;
class Item extends Model
{
    protected $table = 'items';
	protected $fillable = ['name', 'type','price','resurent_id','description'];

	// Get Product details by order
    public function resturent(){
    	
    	return $this->hasOne(Resturent::class,'id','resurent_id');
    	
    }
}
