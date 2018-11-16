<?php

namespace App\Http\Controllers;
use Auth;
use App\Project;
use Illuminate\Http\Request;

class MyPasswordController extends Controller
{   

    public function __construct()
	{
		return $this->middleware('auth');
    }

    public function reset() {
      return view('mypassword');
    }
    
    
}
