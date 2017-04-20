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

Route::get('zs/{name?}', function ($name = 345) {
    return $name;
});

// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
// 	var_dump($postId,$commentId);
//     //
// });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/hd', function () {
//     echo("get");
// });
// Route::any('cc', function () {
//     echo("any");
// });
// Route::match(['post','get'],'/hh',function(){
// 	echo('match');
// });
// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });