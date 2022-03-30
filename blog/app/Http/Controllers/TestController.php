<?php
 
namespace App\Http\Controllers;
 
use App\Model\State;
use Illuminate\Http\Request;
 
class TestController extends Controller
{
    public function index()
    {
        $projects = State::get();
        return response()->json(['projects' => $projects]);
    }
 
   
    public function create()
    {
        
    }
 
   
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
 
        $project = new State();
        $project->name = $request->name;
        $project->email = $request->email;
        $project->password = $request->password;
        $project->save();
        return response()->json(['status' => "success"]);
    }
 
    public function show($id)
    {
        $project = State::find($id);
        return response()->json(['project' => $project]);
    }
 
    public function edit($id)
    {
        $project = State::find($id);
        return response()->json(['project' => $project]);
    }
 
  
    public function update(Request $request, $id)
    {
 
        $project = State::find($id);
        $project->name = $request->name;
        $project->email = $request->email;
        $project->password = $request->password;
        $project->save();
        return response()->json(['status' => "success"]);
    }
 

    public function destroy($id)
    {
        Project::destroy($id);
        return response()->json(['status' => "success"]);
    }
 
    
}