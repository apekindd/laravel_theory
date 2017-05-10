<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct() {
		
		$this->middleware('auth');
	}
    
    public function show() {

        /*$user = Auth::user();

        if(!Auth::check()){
            return redirect('/login');
        }*/

        //echo '<pre>';print_r($user); echo '</pre>';
		
		return view('welcome');
	}
}
