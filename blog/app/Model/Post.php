<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
	public $timestamps = true;
	
	protected $fillable = [
		'name', 'email','password'
	];
}
