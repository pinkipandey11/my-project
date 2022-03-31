<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
    protected $table = 'image_uploads';
	public $timestamps = true;
	
	protected $fillable = [
		'image'
	];
}
