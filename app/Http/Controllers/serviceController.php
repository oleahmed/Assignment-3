<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
  public function view()
    {
    
    	return view ('service');
    }

    public function getData()
    {
    	dd(request()->all());
    }
}
