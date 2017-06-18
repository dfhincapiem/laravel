<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

	public function home()
	{

		$test = ['1','2','3']; 
		return view ('pages.about', compact('test'));

	}



	public function welcome()
	{

		return view ('welcome');

	}

}
