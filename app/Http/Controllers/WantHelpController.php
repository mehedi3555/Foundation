<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\WantHelp;

use DB;

class WantHelpController extends Controller
{
    public function want(){
        $projects = DB::table('projects')->get();
        $members = DB::table('teams')->get();
    	return view('FrontEnd.pages.wanthelp', ['projects' => $projects, 'members' => $members]);
    }

    public function storeWant(Request $request){
    	
    	$want = new WantHelp();
    	$want->firstname = $request->firstname;
    	$want->lastname = $request->lastname;
    	$want->email = $request->email;
    	$want->phone = $request->phone;
    	$want->message = $request->message;
    	$want->save();
    	return redirect('/want-help')->with('message','Message sent successfully done');
    }
}
