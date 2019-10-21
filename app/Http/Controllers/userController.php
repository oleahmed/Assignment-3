<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function view()
    {
    
    	return view ('user');
    }

    public function getData()
    {
    	dd(request()->all());
    }
}
