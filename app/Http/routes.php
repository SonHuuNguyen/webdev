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
Route::group(['middleware' => ['web']], function () {
Route::get('/', function () {
    return view('welcome');
});

Route::get('sample/news', function () {
    return view('sample.news_sample');
});

Route::get('sample/news/admin', function () {
    return view('sample.news_admin');
});

Route::resource('posts', 'PostController');
Route::resource('comments', 'PostController');



});
// Route::get('sample/news/admin/add', 'PostController@addPost');

// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// })->where('id', '[0-9]+');

// Route::get('user2/{name?}', function ($name = 'John') {
//     return $name;
// });
// Route::auth();

// Route::get('/home', 'HomeController@index');
