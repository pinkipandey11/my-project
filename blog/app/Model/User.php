<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'users';
	public $timestamps = true;
	
	protected $fillable = [
		'name', 'email','password'
	];
}
