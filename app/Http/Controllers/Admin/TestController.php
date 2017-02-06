<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function show(Request $request, $id=false) {

        if($request->isMethod('post')){

            //$request->flash();
           // echo '<pre>';print_r($request->all()); echo '</pre>';
            $this->validate($request, [
                'name' => 'required'
            ]);


        }


        return view('default.test',['title'=>'Contacts']);
    }
}
