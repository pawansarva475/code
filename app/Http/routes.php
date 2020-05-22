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

Route::get('/', function () {
//    return view('welcome');

//    1:-
//    if(Auth::check()){
//        return "the user is ready";
//    }

//    2:-
//    $username='pawan';
//    $password=123456;
//
//    if(Auth::attempt(['username'=>$username,'password'=>$password])){
//        return redirect()->intended('admin');
//    }

//    3:-
    
});

Route::auth();

Route::get('/home', 'HomeController@index');
