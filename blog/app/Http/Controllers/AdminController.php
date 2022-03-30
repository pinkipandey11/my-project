<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Model\Admin;
use\App\Model\UserAddress;
use DB;
use Log;

class AdminController extends Controller
{
    public function insertaddress() {
        
          return view('address');
        
    }

    public function insert(Request $request){
       
        $admins = new Admin;
        $admins->firstName = $request->firstName;
        $admins->lastName = $request->lastName;
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'address.*'=>'required' 
        ]);
        
        $admins->save();

        foreach($request->address as $value){
            $address = new UserAddress;
            $address->address=$value;
            $address->userid=$admins->id;
            $address->save();
        }
        return redirect('/retrive')
                ->with('success','Admin Inserted Successfully');
        
    }

    public function index() {
        $admins = Admin::all();
        return view('admin-table',['admins'=>$admins]);
    }
    public function show($id) {
        $admins = UserAddress::where('userid', $id)->get();
        return view('admin-address-table',['addresses'=>$admins]);

     }  
    
    public function drop($id){
        $admins = Admin::where('id', $id);
        $admins->delete();
        return redirect('/retrive');
        
    }
     
}
