<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminAjax extends Model
{
    protected $table = 'admin_ajaxes';
	public $timestamps = true;
	
	protected $fillable = [
		'firstName', 'lastName'
	];
}
