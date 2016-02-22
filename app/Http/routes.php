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


//creer un autre nom de controller
//Route::resource('offer', 'OffersController');
//Route::get('proposer-un-exercice', ['as' => 'prop_exo', 'uses' => 'OffersController@index']);


//a faire sauter tout dans un controller admin, les deux routing correspondent a la meme chose
//Route::get('admin/list', ['as' => 'admin.list', 'uses' => 'AdminController@listAdmin']);


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

Route::group(['middleware' => 'web'], function () {

    Route::get('/', ['as' => 'accueil', function(){
        return view('accueil');
    }]);

    Route::get('contact', ['as' => 'contactus', function(){
        return view('contact.contact');
    }]);

    Route::get('about', ['as' => 'about', function(){
        return view('about');
    }]);
    Route::auth();

    Route::group(['namespace' => 'Admin' ,'prefix' => 'admin'], function(){
        route::resource('posts', 'PostsController');
        route::get('posts/validate', ['as' => 'admin.posts.valid', 'uses' => 'PostsController@valid']);
    });

    Route::resource('posts', 'PostsController');
});

