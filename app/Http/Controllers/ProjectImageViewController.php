<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Project;
use DB;

class ProjectImageViewController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function show_project(){

    	$projects = DB::table('projects')->get();
        return view('BackEnd.pages.showproject', ['projects' => $projects]);
    }

    public function info_project($id){

    	$project = Project::where('id',$id)->first();
    	$images = DB::table('projects')

            ->join('project_images', 'projects.id', '=', 'project_images.p_id')
            ->select('project_images.*')
            ->where('projects.id', $id)
            ->get();

            $videos = DB::table('projects')
            ->join('videos', 'projects.id', '=', 'videos.p_id')
            ->select('videos.*')
            ->where('projects.id', $id)
            ->get();

    	return view('BackEnd.pages.projectinfo', ['project' => $project, 'images' => $images, 'videos' => $videos]);
    }
}
