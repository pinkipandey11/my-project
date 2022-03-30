<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{

    use Notifiable;
    
        protected $guard ='user';     
        
        public $timestamps = true;

        protected $fillable = [
            'name', 'email', 'password',
        ];


         
    }
