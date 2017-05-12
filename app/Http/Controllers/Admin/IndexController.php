<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function show() {
    	
    	$array = array(
    						'title'=>'Laravel Project',
    						);
		
		if(view()->exists('default.index')) {
			return view('default.index',$array);
		}
		abort(404);
	}
}
