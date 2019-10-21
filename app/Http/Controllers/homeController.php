<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
   public function view()
    {
    
    	return view ('home');
    }

    public function getData()
    {
    	dd(request()->all());
    }
}
