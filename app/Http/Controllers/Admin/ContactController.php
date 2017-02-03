<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /*private $request;
    public function __construct(Request $request){
        $this->request = $request;
    }*/

    public function show(Request $request, $id=false) {

        if($request->isMethod('post')){
            //save all post data in session
            //$request->flash();
            //return redirect()->route('contact');

            $this->validate($request, [
                "name"=>"required"
            ]);
        }

        if(view()->exists('default.contact')) {
            return view('default.contact',['title'=>'Contacts']);
        }
        abort(404);
    }
}
