<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function view()
    {
    
    	return view ('contact');
    }

    public function getData()
    {
    	dd(request()->all());
    }
}
