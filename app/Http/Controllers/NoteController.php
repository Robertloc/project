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
            'text'=>$request->text,
            'user_id'=> Auth::user()->id

            
        ]);

       
        return redirect(action('ProjectController@show', $id));
    }


    public function show()
    {
        $noteversions = Noteversion::get();
        
        return view('note/show')->with(compact('noteversions'));
    }

    public function edit($id)
    {
        $note = Note::findOrFail($id);
    

        return view('note/edit', [
            'note' => $note]);
    }


    public function update(Request $request, $id=null)
    {
        $note = Note::findOrFail($id);

        $noteversion= Noteversion::create ([
            'note_id'=> $note->id,
            'text'=>$request->text,
            'user_id'=> Auth::user()->id
            
        ]);
  
        return redirect(action('ProjectController@show', $note->project->id));
    }

    public function destroy($id)

    {

        $note = Note::findOrFail($id);
        $project =  $note->project;

        $note->delete();

        return redirect(action('ProjectController@show', $project->id));
    }

    public function history($id)
    {
        $note = Note::findOrFail($id);
        
        return view('note/history', ['note' => $note]);

    }
}
