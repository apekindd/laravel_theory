<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    
    public function show() {
		if(view()->exists('default.about')) {
			return view('default.about',['title'=>'About']);
		}
		abort(404);
	}
    
}
