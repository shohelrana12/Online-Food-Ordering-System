<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements AuthenticatableContract
{
	use Authenticatable;
    protected $table = 'admins';

	protected $fillable = ['name', 'email', 'password'];

	protected $hidden   = ['password', 'remember_token'];
}
