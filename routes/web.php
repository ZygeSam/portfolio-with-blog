<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');



Route::resource('posts', 'Postscontroller');

Route::get('/welcome', function(){
    return view ('welcome');
});

Route::group(['middleware'=> ['web']], function(){
    Route::get('/register', 'PagesController@signup');
    Route::get('/signin', 'PagesController@login')->name('signin');
    Route::get ('/dashboard', 'PostsController@dashboard')->name('dashboard');
    Route::post('/signup', 'UsersController@postSignUp')->name('signup');
    Route::post('/login', 'UsersController@postSignIn')->name('login');
    

});
