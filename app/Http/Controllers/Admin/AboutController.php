<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    //
    
    public function show() {
		if(view()->exists('default.about')) {

		    /*$view = view('default.about',['title'=>'About'])->render();
		    return (new Response($view))->header('Content-Type','test');*/

		    //return response()->view('default.about',['title'=>'123']);
		    //return response()->download('robots.txt','mytext.txt');
			return view('default.about',['title'=>'About']);

            //return response()->myRes('hello');
		}
		abort(404);
	}
    
}
