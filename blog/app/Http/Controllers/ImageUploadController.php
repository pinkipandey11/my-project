<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ImageUpload;
use Illuminate\Support\Facades\File; 
use Log;

class ImageUploadController extends Controller
{
 public function insertimage(){
    return view('image-upload');

  }

  public function insert(Request $request){
   
    $image = new ImageUpload;
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    log::debug($request->image->getClientOriginalExtension());
    $imageName = time().'.'.$request->image->getClientOriginalExtension();
    $image['image'] = $imageName;
    $request->image->move(public_path('images'), $imageName);
    $image->save();
    return redirect('image-table')
    ->with('success','Image Uploaded Successfully');

  }

  public function index() {
    $image = ImageUpload::all();
    return view('image-table',['images'=>$image]);
  }

  public function delete($id){
    $image = ImageUpload::where('id',$id)->first();
    $image_path = public_path('/images/') .$image->image;
      if (File::exists($image_path)) {
      @unlink($image_path);
      }
    $image->delete($image_path);
    return redirect('image-table')
    ->with('success','Image Deleted Successfully');
  }
}
