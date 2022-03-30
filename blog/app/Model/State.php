<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
	public $timestamps = true;
	
	protected $fillable = [
		'name', 'email','password'
	];
}
