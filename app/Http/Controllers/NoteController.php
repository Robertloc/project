<?php

namespace App\Http\Controllers;
use Auth;
use App\noteVersion;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create()
    { 
      $note = new noteVersion;
      return view('note/create', compact('note'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required|max:50',
    		'text' => 'required'
        ]);

        $note = noteVersion::create($request->all());

        return redirect()->back();
    }
}
