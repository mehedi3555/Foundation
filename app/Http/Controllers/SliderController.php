<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use\App\Slider;

use DB;

class SliderController extends Controller
{
    
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function image_up(){
    	return view('BackEnd.pages.imageup');
    }

    public function storeSlider(Request $request){

    	if($request->hasFile('filename')){

    		foreach ($request->filename as $photo) {
                
    		$orgName = $photo->getClientOriginalName();
            $name = rand(100000000,999999999).".".$orgName;
    		$path = 'BackEnd/slider_image/';
    		$photo->move($path,$name);
    		$image = new Slider();
    		$image->filename = $name;
			$image->save();
    	}
    	return redirect('/slider-upload')->with('message','Slider insert successfully done');
    	}
    	
    }

    public function slider(){

        $image = DB::table('sliders')->get();
        return view('BackEnd.pages.slider', ['image' => $image]);
    }

    public function delete_slider($id){

        $image = Slider::find($id);
        $image->delete();
        return redirect('/slider-view')->with('message','Image delete successfully done');
    }
}
