<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resturent extends Model
{
    protected $table = 'resturents';
	protected $fillable = ['name', 'location','phone','logituted', 'latituted','description'];

}
