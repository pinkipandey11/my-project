<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use\App\Model\Post;
use DB;
use Log;

class PostController extends Controller
{
    
    public function insertvalue() {
        
        return view('postAjax');
      
    }
    
    public function insert(Request $request)
    {
        
        $post = new Post();
        $post->name = $request['name'];
        $post->email = $request['email'];
        $post->password = $request['password'];

        $validatorRules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ];

        $validator = Validator::make($request->all(),$validatorRules);
        if($validator->fails()){
             //$error = $validator->messages()->first();
            $error = $validator->errors();
            log::debug($error);
            return response()->json(['status' => false, 'error'=>$error]);
        }

        $post->save();
        
        $post = Post::latest()->get();

        return response()->json(['status' => true, 'success'=>'post saved successfully.']);

    }

    public function index()
    {
        $post = Post::get();
        
        return view('ajax-table', ['posts' => $post]);
    }

    public function show($id) {
        $post = Post::find($id);
        return view('edit-ajax',compact(['post','id']));
    }

    public function change(Request $request,$id) {

    $post = Post::find($id);
    $post->name = $request['name'];
    $post->email = $request['email'];
    $post->password = $request['password'];
    $post->update();
    $post = Post::latest()->get();
    return response()->json(['success'=>'Post Updated successfully.']);
    }

    public function drop(Request $request){
        $id = $request->idFromAjax;
        $post = Post::where('id',$id);
        $post->delete();
        return "done";
        
    }
}
