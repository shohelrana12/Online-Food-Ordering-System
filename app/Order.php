<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
	protected $fillable = ['item_id', 'user_id','quantity','price', 'location','status'];
}
