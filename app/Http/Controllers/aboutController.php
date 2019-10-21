<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function view()
    {
    
    	return view ('about');
    }

    public function getData()
    {
    	dd(request()->all());
    }
}
