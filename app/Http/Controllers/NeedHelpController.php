<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\NeedHelp;

use DB;


class NeedHelpController extends Controller
{
    public function need(){
        $projects = DB::table('projects')->get();
    	return view('FrontEnd.pages.needhelp', ['projects' => $projects]);
    }

    public function storeNeed(Request $request){

    	$help = new NeedHelp();
    	$help->firstname = $request->firstname;
    	$help->lastname = $request->lastname;
    	$help->email = $request->email;
    	$help->phone = $request->phone;
    	$help->message = $request->message;
    	$help->save();
    	return redirect('/need-help')->with('message','Message sent successfully done');
    }
}
