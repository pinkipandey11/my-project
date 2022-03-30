<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use\App\Model\AdminAjax;
use\App\Model\AdminAjaxAddress;
use Log;

class AdminAjaxController extends Controller
{
    public function insertAjax(){
        return view('ajax-address');
    }

    public function insert(Request $request){
        
        $admin = new AdminAjax;
        $admin->firstName = $request->firstName;
        $admin->lastName = $request->lastName;
        $validatorRules = [
            'firstName' => 'required',
            'lastName' => 'required',
            'address.*' => 'required'
        ];

        $validator = Validator::make($request->all(),$validatorRules);
        if($validator->fails()){
            $error = $validator->messages()->first();
            return response()->json(['success'=>$error]);
        }
        $admin->save();

        foreach($request->address as $value){
            $address = new AdminAjaxAddress;
            $address->address=$value;
            $address->admin_id=$admin->id;
            $address->save();
        }
        $admin = AdminAjax::latest()->get();

        return response()->json(['success'=>'Admin saved successfully.']);
    }

    public function index(){
        $admin = AdminAjax::get();
        
        return view('admin-ajax-table', ['admins' => $admin]);
    }

    public function show($id) {
        $admin = AdminAjaxAddress::where('admin_id', $id)->get();
        return view('admin-ajax-address-table',['addresses'=>$admin]);

     }  

     public function drop(Request $request){
        
        $id = $request->idAjax;
        $admin = AdminAjax::where('id',$id);
        $admin->delete();
        return "done";
     }
}
