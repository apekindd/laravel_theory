<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use DB;

class AboutController extends Controller
{
    //
    
    public function show() {
		if(view()->exists('default.about')) {

		    /*$view = view('default.about',['title'=>'About'])->render();
		    return (new Response($view))->header('Content-Type','test');*/

		    //return response()->view('default.about',['title'=>'123']);
		    //return response()->download('robots.txt','mytext.txt');

            //$articles = DB::select("SELECT * FROM `articles` WHERE id=:id",['id'=>4]);
            //DB::insert("INSERT INTO `articles` (`name`,`text`) VALUES(?,?)",['test1','TEXT']);
            //$ctn = DB::update("UPDATE `articles` SET `name` = ? WHERE id=?",['test123',8]);
            //$ctn = DB::delete("DELETE FROM `articles` WHERE `id`=?",[8]);
            $articles = DB::select("SELECT * FROM `articles`");
            dump($articles);

			return view('default.about',['title'=>'About']);

            //return response()->myRes('hello');
		}
		abort(404);
	}
    
}
