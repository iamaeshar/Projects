<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*Index Page*/
    public function Index(){
    	return view('pages.index');
    }

    /*About Page*/
    public function About(){
    	return view('pages.about');
    }

    /*Services*/
    public function Services(){
        return view('pages.services');
    }
}
