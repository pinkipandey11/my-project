<?php

namespace App\Http\Controllers;
use App\Model\Category;
use Illuminate\Http\Request;
use DB;
use Log;

class CategoryController extends Controller
{
    public function insertform() {
        return view('category');
      }
     ///// Insert Data in Database/////// 

    public function insert(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $request->validate([
            'name' => 'required',
        ]);
        $category->save();
        return redirect('/display')
                ->with('success','category Inserted Successfully');
        
    }

    ///// Fatch data from database ///


    public function table() {
        $category = Category::get();
        return view('category-table',['categories'=>$category]);
     }

/// Update data in database with select id ////

    public function display($id) {
        $category = Category::where('id', $id)->first();
        return view('category-edit',['categories'=>$category]);
    }

    public function change(Request $request,$id) {
    $category = Category::find($request->id);
    $request->validate([
        'name' => 'required',
    ]);
    $category->update(['name' => $request->name]);
    return redirect('/display')
                ->with('success','category Updated Successfully');
    }
    

//// Delete data from database ////


    public function drop($id){
        $category = Category::where('id',$id);
        $category->delete();
        return redirect('/display')
        ->with('success','category Deleted Successfully');
        
    }
}
