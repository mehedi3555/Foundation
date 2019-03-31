<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FrontEndController extends Controller
{
    public function index(){

    	$projects = DB::table('projects')->get();
    	$slider = DB::table('sliders')->get();
    	return view('FrontEnd.pages.home', ['projects' => $projects, 'slider' => $slider]);
    }

    public function about(){

    	$projects = DB::table('projects')->get();
    	return view('FrontEnd.pages.about', ['projects' => $projects]);
    }
}