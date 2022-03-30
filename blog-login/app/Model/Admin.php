<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable 
{
   use Notifiable;
    
    protected $guard ='admin';
    public $timestamps = true;
    
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
}
