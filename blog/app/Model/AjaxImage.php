<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AjaxImage extends Model
{
    protected $table = 'ajax_images';
	public $timestamps = true;
	
	protected $fillable = [
		'image'
	];
}
