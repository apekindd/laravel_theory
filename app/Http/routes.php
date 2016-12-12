<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' =>'home', function () {
    return view('welcome');
}]);

Route::get('/article/{id}', ['as' =>'article', function ($id) {
    echo $id;
}]);

Route::get('/page', function () {
    return view('page');
});

//add params
Route::get('/page/{id}', function($cat, $id){
    var_dump($cat);
    var_dump($id);
})/*->where(['id'=>'[0-9]+','cat'=>'[A-Za-z0-9\-\_]+'])*/;

//group of routes with prefix 'admin'
Route::group(['prefix'=>'admin'],function(){
    Route::get('page/create', function(){
       //echo 'page/create';
        //return redirect()->route('home');
        return redirect()->route('article',['id'=>10]);
       //echo route('home');
    });
    Route::get('page/edit', function(){
       echo 'page/edit';
    });
});

//array with methods
/*
Route::match(['get','post'], '/path', function(){

});
*/

//any methods
/*
Route::any('/path', function(){

});
*/