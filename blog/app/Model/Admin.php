<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
	public $timestamps = true;
	
	protected $fillable = [
		'firstName', 'lastName'
	];
}
