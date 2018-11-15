<?php

namespace App\Http\Controllers;
use Auth;
use App\Noteversion;
use App\Project;
use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{   

    public function __construct()
	{
		return $this->middleware('auth');
    }
    
    public function create($id)
    { 
       $project = Project::findOrFail($id);

      return view('note/create', ['project'=> $project]);
    }


    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'name'=> 'required|max:50',
    		'text' => 'required'
        ]);

        $note = Note::create([
            'project_id'=>$id,
            'name'=> $request->name,
            'user_id'=> Auth::user()->id
            
        ]);

        $noteversion= Noteversion::create ([
            'note_id'=> $note->id,
            'text'=>$request->text
            
        ]);

       
        return redirect(action('ProjectController@show', $id));
    }


    public function show()
    {
        $noteversions = Noteversion::get();
        
        
        // $projects = $request->option;
        // foreach($projects as $project)
        // {
           
        // }

        return view('note/show')->with(compact('noteversions'));
    }

    public function edit($id)
    {
        $noteversions = Noteversion::findOrFail($id);

        return view('note/edit', ['noteversions' => $noteversions]);
    }


    public function update(Request $request, $id=null)
    {
        $noteversions = Noteversion::findOrFail($id);

        $noteversions->name = $request->input('name');
        $noteversions->text = $request->input('text');

        $noteversions->save();

        return redirect(action('NoteController@show', $id));
    }

    public function destroy($id)

    {

        $note = Note::findOrFail($id);
        $project =  $note->project;

        $note->delete();

        return redirect(action('ProjectController@show', $project->id));
    }
}
