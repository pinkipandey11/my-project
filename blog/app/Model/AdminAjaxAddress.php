<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminAjaxAddress extends Model
{
    protected $table = 'admin_ajax_addresses';
	public $timestamps = true;
	
	protected $fillable = [
		'address', 'admin_id'
	];
}
