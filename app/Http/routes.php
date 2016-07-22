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


use Illuminate\Support\Facades\Request;
use Vinkla\Pusher\Facades\Pusher as PusherFacade;


Route::get('api/tasks', function () {

   return $tasks = vueajax\Task::latest()->get();

});


Route::get('/browserify', function () {

    return view('browserify');

});



Route::get('/', function () {




      $users= \vueajax\User::all();
    return view('welcome',compact('users'));

});


Route::get('/trigger','pushController@index' );






// vue tutorial vue an laravel

Route::get('guestbook',function(){
    
   return view('guestbook');
});
Route::get('/api/message',function(){

    $message= vueajax\Message::all();
    return $message;

});

Route::post('/api/message',function(){

    vueajax\Message::create(request::all());
});



Route::get('/vueify',function(){

   return view('vueify');
});