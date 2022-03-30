<?php
namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Log;

class UserController extends Controller
{

  ///// Insert Data in Database/////// 
  public function insertform() {
      try{
        return view('user');
      }catch(\Exception $e){
        return redirect('/show');
      }
  }

    public function insert(Request $request){
       
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make('password');
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],
        ['name.required'=>'Your Name is Required.']
       );

        $users->save();
        return redirect('/show')->with('success','User Inserted Successfully');
        
       
    }

///// Fatch data from database ///

    public function index() {
        $users = User::all();
        return view('table',['users'=>$users]);
     }


/// Update data in database with select id ////


    public function show($id) {
        $users = User::where('id', $id)->first();
        return view('edit',['users'=>$users]);
    }

    public function edit(Request $request,$id) {

        $users = User::find($id);
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->password = $request['password'];
        $users->update();
        return redirect('/show')
         ->with('success','User Updated Successfully');
    }
    

//// Delete data from database ////

    public function delete($id){
        $users = User::where('id',$id);
        $users->delete();
        return redirect('/show')
                ->with('success','User deleted Successfully');
    }
    


}