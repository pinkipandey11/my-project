<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $table = 'useraddresses';
	public $timestamps = true;
	
	protected $fillable = [
		'address', 'userid'
	];
}
