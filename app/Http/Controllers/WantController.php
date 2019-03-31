<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\WantHelp;

use DB;

class WantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view_want(){

    	$want = DB::table('want_helps')->get();
    	return view('BackEnd.pages.viewwant', ['want' => $want]);
    }

    public function info_want($id){

    	$want = WantHelp::where('id',$id)->first();
    	return view('BackEnd.pages.infowant', ['want' => $want]);
    }
}
