<?php

namespace App\Http\Controllers;
use Auth;
use App\Noteversion;
use App\Project;
use Illuminate\Http\Request;

class NoteController extends Controller
{   

    public function __construct()
	{
		return $this->middleware('auth');
    }
    
    public function create()
    { 
    
      return view('note/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|max:50',
    		'text' => 'required'
        ]);

        $note = Noteversion::create($request->all());

       
        return redirect(action('NoteController@show'));
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
         Noteversion::destroy($id);
          
    
        return redirect(action('NoteController@show'));
    }
}
