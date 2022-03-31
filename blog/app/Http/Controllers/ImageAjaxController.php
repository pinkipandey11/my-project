<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\AjaxImage;
use Illuminate\Support\Facades\File; 
use Log;

class ImageAjaxController extends Controller
{
    public function ajaxinsert(){
      return view('ajax-image');
    }
    public function insert(Request $request){
   
        $image = new AjaxImage;
        $validatorRules = [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];

        $validator = Validator::make($request->all(),$validatorRules);
        if($validator->fails()){
            $error = $validator->errors()->first();
            // $error = $validator->errors();
            return response()->json(['status' => false, 'error'=>$error]);
        }
        
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $image['image'] = $imageName;
        $request->image->move(public_path('ajaximages'), $imageName);
        $image->save();
        //$image = AjaxImage::latest()->get();
        return response()->json(['status' => true, 'success'=>'image Upload successfully.']);
    
    }

    public function index(){
        $image = AjaxImage::get();
        
        return view('ajax-image-table', ['ajaximages' => $image]);
    } 

    public function drop(Request $request){
        $id = $request->idAjaxImage;
        $image = AjaxImage::where('id',$id)->first();
        $image_path = public_path('/ajaximages/') .$image->image;
         if (File::exists($image_path)) {
          @unlink($image_path);
         }
        $image->delete($image_path);
        return "done";
        
    }
    
    
}
