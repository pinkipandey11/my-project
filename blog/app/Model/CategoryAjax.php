<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryAjax extends Model
{
    protected $table ='category_ajaxes';
    public $timestamps = true;
    
    protected $fillable = [
              'name'
    ];

}
