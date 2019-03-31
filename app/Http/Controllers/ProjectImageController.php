<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\ProjectImage;

use DB;

class ProjectImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function upload_image(){

    	$project = DB::table('projects')
    	->select('id', 'name')
    	->get();
    	return view('BackEnd.pages.imageupload',['project' => $project]);
    }

    public function storeImage(Request $request){

    	$photo = $request->filename;
    	$orgName = $photo->getClientOriginalName();
        $name = rand(100000000,999999999).".".$orgName;
    	$path = 'BackEnd/project_image/';
    	$photo->move($path,$name);
    	$this->saveImage($request, $name);
    	return redirect('/upload')->with('message','Image insert successfully done');
    	}
    	

	protected function saveImage($request, $name){

    	$image = new ProjectImage();
    	$image->caption = $request->caption;
        $image->p_id = $request->p_id;
    	$image->filename = $name;
    	$image->save();
    }

    public function delete_img($id){

        $image = ProjectImage::find($id);
        $image->delete();
        return redirect('/view-project')->with('d_message','Image delete successfully done');
    }

}