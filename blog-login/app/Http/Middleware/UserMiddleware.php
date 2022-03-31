<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Closure;
use Log;

class UserMiddleware
{

    public function handle($request, Closure $next)
    {

       if(!Auth::guard('user')->check()){
            return redirect('user-login');
        }
            return $next($request);
       
    
  }
}
