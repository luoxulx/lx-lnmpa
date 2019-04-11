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

Route::get('/', function () {
    print_r(PHP_VERSION);die;
    // return view('welcome');
});

Route::group(['namespace'=>'Auth'], function (){
    Route::get('/facebook/auth/login', 'FacebookController@redirectToProvider')->name('facebook.auth.login');
    Route::get('/facebook/auth/callback', 'FacebookController@handleProviderCallback')->name('facebook.auth.callback');
    // Route::get('/facebook/privacy_policy', 'AuthFacebookController@privacyPolicyView')->name('facebook.privacy_policy');
});

Route::group(['namespace'=>'Web'], function (){

    Route::get('/', 'IndexController@index');

    Route::resource('blog', 'BlogController', [
        'names' => ['index' => 'blog.index', 'show' => 'blog.show',],
        'except' => ['create', 'edit', 'store', 'update', 'destroy']
    ]);
});
