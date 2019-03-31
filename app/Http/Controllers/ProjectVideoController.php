<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Video;

use DB;

class ProjectVideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function upload_video(){

    	$project = DB::table('projects')
    	->select('id', 'name')
    	->get();
    	return view('BackEnd.pages.videoup',['project' => $project]);
    }

    public function store_video(Request $request){

    	$video_url = new Video();
    	$video_url->title = $request->title;
        $video_url->url = $request->url;
    	$video_url->p_id = $request->p_id;
    	$video_url->save();
    	return redirect('/upload-video')->with('message','Video upload successfully done');
    }

    public function delete($id){

        $video = Video::find($id);
        $video->delete();
        return redirect('/view-project')->with('d_message','Video delete successfully done');
    }
}
