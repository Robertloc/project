<?php

namespace App\Http\Controllers;
use Auth;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{   

    public function __construct()
	{
		return $this->middleware('auth');
    }
    
    public function create()
    { 
    
      return view('project/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|max:50'

        ]);

        $project = Project::create([
            'name'=> $request->name,
            'user_id'=> Auth::user()->id
        
        ]);
    
       
        return redirect(action('ProjectController@show', $project->id));
    }

    public function index()
    {
        $projects = Project::get();
    

        return view('project/index')->with(compact('projects'));
    }

    public function edit($id)
    {
        $projects = Project::findOrFail($id);

        return view('project/edit', ['projects' => $projects]);
    }


    public function update(Request $request, $id=null)
    {
        $projects = Project::findOrFail($id);

        $projects->name = $request->input('name');

        $projects->save();

        return redirect(action('ProjectController@show', $id));
    }

    public function destroy($id)
    {
        Project::destroy($id);
          
    
        return redirect(action('ProjectController@index'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('project/show', ['project'=>$project]);

    }
}
