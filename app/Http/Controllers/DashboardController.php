<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class DashboardController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function home(){

    	$project = DB::table('projects')->count();
    	$need = DB::table('need_helps')->count();
    	$want = DB::table('want_helps')->count();
    	return view('BackEnd.pages.home',['project' => $project, 'need' => $need, 'want' => $want,]);
    }
}
