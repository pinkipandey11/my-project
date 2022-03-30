<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Model\Admin;
use Auth;
use Session;
use Log;

class AdminController extends Controller
{
   

    public function insertadmin(){
        return view('admin-form');
    }

    public function insert(Request $request){
        $admins = new Admin;
        $admins->name = $request->name;
        $admins->email = $request->email;
        $admins->password = Hash::make($request->password);
        $admins->save();
       return redirect('/admin-login')->with('success','users Inserted Successfully');
          
    }

    public function adminLogin(){

        if(Auth::guard('admin')->check()){
            return redirect('admin-dashboard');
        }

          if(!Auth::guard('admin')->check()){
            return view('admin-login');
         }
   }
   
    public function postLogin(Request $request)
    {
       
         if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
           

             return redirect()->intended(route('admin-dashboard'));
        }
        
      return Redirect('admin-login');
       
    }

    public function adminhome(){

        return view('admin-dashboard');
     
    }


      public function destroy(Request $request) {
        
         // auth()->logout();
         Auth::guard('admin')->logout();
        return Redirect('admin-login');
    }
       
}
