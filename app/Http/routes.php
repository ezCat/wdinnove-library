<?php

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

    Route::get('filter', function(){
        return view('welcome');
    });

    Route::group(['namespace' => 'Coaching', 'prefix' => 'coaching', 'middleware' => 'auth'], function(){
        Route::resource('injuries', 'InjuriesController');
        Route::resource('mailing', 'MailingController');
        Route::resource('calendar', 'CalendarController');
        Route::resource('document', 'DocumentController');
        Route::get('reminder/list', ['as' => 'coaching.reminder.list', 'uses' => 'ReminderController@listing']);
        Route::resource('reminder', 'ReminderController');
        Route::get('home', function(){
            return view('coaching.home');
        });
    });

});
