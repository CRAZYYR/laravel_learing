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


// 路由参数匹配
// Route::get('zs/{name?}', function ($name = 345) {
//     return $name;
// })->where('name', '[0-9]+');

// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
// 	var_dump($postId,$commentId);
//     //
// });
Route::get('/', function () {
    return view('index');
});



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
// 
// Route::get('test','Admin\IndexController@index');
// 
	/* ===========路由命名=============*/

// Route::get('test',['as'=>'pro',function(){
// 	echo '<a href="'.route('pro').'">'.route('pro').'</a>';
// 	echo "<h1>string</h1>";
// }]);
// 
// ============Named Routes===========

// Route::get('test',['as'=>'pro','uses'=>'Admin\IndexController@index']);

// Route::get('test', 'Admin\IndexController@index')->name('pro');
// 
//==========登录页面演示(路由)===========
	// Route::get('Admin/login','Admin\IndexController@login');

	// Route::get('Admin/welcome','Admin\IndexController@index');
	// 
	// 
// Route::group(['prefix' => 'Admin','namespace' => 'Admin'], function () {
  
// 	Route::get('login','IndexController@login');

// 	Route::get('welcome','IndexController@index');
// 	Route::resource('photo', 'PhotoController');
//     });


// // ===============session的添加和显示练习===============

// Route::group(['middlewareGroups' => ['web']], function () {
//    Route::get('add_Session', function () {
//    	session(array('uid'=>'789'));
//     echo "添加session";
// 	});
//     Route::get('show_Session', function () {
//     	var_dump(session('uid'));
//      echo "显示session";
// 	});

// });

// ===========自定义中间件=============
// 
// 
 Route::get('Admin/login','Admin\IndexController@login');
Route::group(['middleware' => ['admin.login']], function () {
 Route::get('middle',function(){
 	echo "string";
 });

});