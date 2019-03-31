<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Project;
use DB;

class ProjectInfoController extends Controller
{
    public function project($id){

    	$projects = DB::table('projects')->get();
    	$project = Project::where('id',$id)->first();

    	$images = DB::table('projects')
            ->join('project_images', 'projects.id', '=', 'project_images.p_id')
            ->select('project_images.filename as photo','project_images.caption')
            ->where('projects.id', $id)
            ->get();

        $videos = DB::table('projects')
            ->join('videos', 'projects.id', '=', 'videos.p_id')
            ->select('videos.*')
            ->where('projects.id', $id)
            ->get();
            
        return view('FrontEnd.pages.project', ['project' => $project, 'projects' => $projects, 'images' => $images, 'videos' => $videos]);
    }
}
