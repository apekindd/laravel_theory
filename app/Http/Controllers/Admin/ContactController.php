<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;

class ContactController extends Controller
{
    /*private $request;
    public function __construct(Request $request){
        $this->request = $request;
    }*/

    public function show() {
        if(view()->exists('default.contact')) {
            return view('default.contact',['title'=>'Contacts']);
        }
        abort(404);
    }

    public function store(Requests\ContactRequest $request, $id=false) {

        if($request->isMethod('post')){
            //save all post data in session
            //$request->flash();
            //return redirect()->route('contact');

            /*$this->validate($request, [
                "name"=>"required"
            ]);*/


            //ручная валидация
            /*$messages = [];
            $validator = Validator::make($request->all(),[
                'name'=>'required'
            ], $messages);

            if($validator->fails()){
                return redirect()->route('contact')->withErrors($validator)->withInput();
            }*/

        }

        if(view()->exists('default.contact')) {
            return view('default.contact',['title'=>'Contacts']);
        }
        abort(404);
    }
}
