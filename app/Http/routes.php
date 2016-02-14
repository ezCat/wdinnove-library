<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', ['as' => 'home', function(){
    return view('home');
}]);

Route::get('about', ['as' => 'about', function(){
    return view('about');
}]);

Route::get('contact', ['as' => 'contactus', function(){
    return view('contact.contact');
}]);

Route::get('proposer-un-exercice', ['as' => 'prop_exo', 'uses' => 'OffersController@index']);

Route::resource('practice', 'PostsController');

Route::resource('offer', 'OffersController');

Route::get('admin/list', ['as' => 'admin.list', 'uses' => 'AdminController@listAdmin']);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});