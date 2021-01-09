<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class PageController extends Controller
{
	
	public function contact()
	{
		return view ('ban-banh.contact');
	}
	public function about()
	{
		return view ('ban-banh.about');
	}
}