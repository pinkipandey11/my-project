<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Model\User;
use Auth;
use Session;
use Log;

class UserController extends Controller
{

   // public function __construct()
   //  {
   //      $this->middleware('auth');
   //  }

    public function insertuser(){
        return view('user-form');
    }

     public function insert(Request $request){
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        
        $users->save();
        return redirect('/user-login')->with('success','users Inserted Successfully');
          
    }
    
    public function userLogin(){

        if(Auth::guard('user')->check()){
            return redirect('user-dashboard');
        }

         
        if(!Auth::guard('user')->check()){
            return view('user-login');
        }
    }
    

    public function postLogin(Request $request)
    {

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended(route('user-dashboard'));
        }
       
        return redirect('user-login');
    }

    public function userhome(){

      
        return view('user-dashboard');
      }

       public function logout(Request $request) {
      
       // auth()->logout();
        Auth::guard('user')->logout();
        return Redirect('user-login');
    }
       
}
