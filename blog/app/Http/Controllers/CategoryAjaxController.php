<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Model\CategoryAjax;
use Log;

class CategoryAjaxController extends Controller
{
    public function categoryform(){
        return view('category-ajax');
    }

    public function insert(Request $request){
        
        $category = new CategoryAjax();
        $category->name = $request['name'];
        $category->save();
        $category = CategoryAjax::latest()->get();

        return response()->json(['success'=>'Category saved successfully.']);
    }

    public function index()
    {
        $category = CategoryAjax::get();
        
        return view('category-ajax-table', ['categories' => $category]);
    }

    public function show($id) {
        
        $category = CategoryAjax::find($id);
        return view('category-ajax-edit',compact(['category','id']));
    }

    public function change(Request $request,$id) {
       
        $category = CategoryAjax::find($id);
        $category->name = $request['name'];
        $category->update();
        $category = CategoryAjax::latest()->get();
        return response()->json(['success'=>'Post saved successfully.']);
        }

    public function drop(Request $request){
        $id = $request->idFormcategory;
        $category = CategoryAjax::where('id',$id);
        $category->delete();
        return "done";
    }

}
