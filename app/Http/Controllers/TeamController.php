<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Team;

use DB;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(){
    	return view('BackEnd.pages.memberadd');
    }

    public function store(Request $request){

    	$team_member = new Team();
    	$team_member->name = $request->name;
    	$team_member->designation = $request->designation;
    	$team_member->save();
    	return redirect('/team')->with('message','Member add successfully done');
    }

    public function member(){

    	$members = DB::table('teams')->get();
    	return view('BackEnd.pages.memberview', ['members' => $members]);
    }

    public function delete($id){

    	$member = Team::find($id);
    	$member->delete();
    	return redirect('/team-view')->with('message','Member delete successfully done');
    }

    public function update($id){

    	$member = Team::where('id',$id)->first();
    	return view('BackEnd.pages.memberupdate', ['member' => $member]);
    }

    public function update_team(Request $request){

    	$team_up = Team::find($request->memberid);
        $team_up->name = $request->name;
    	$team_up->designation = $request->designation;
        $team_up->save();
        return redirect('/team-view')->with('umessage','Member update successfully done');
    }

}
