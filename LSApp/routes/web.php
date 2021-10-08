<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '. $name . ' with an id of '.$id;
});
*/

/*
Route::get('/about', function(){
    return view('pages.about');
});
*/

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::get('/tf', 'App\Http\Controllers\PagesController@tf');
Route::get('/tf/login', 'App\Http\Controllers\PagesController@tflogin');
// Route::get('/tf/register', 'App\Http\Controllers\PagesController@tfregister');


Route::resource('posts', 'App\Http\Controllers\PostsController');
Route::resource('accounts', 'App\Http\Controllers\AccountsController');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('auth/google', 'App\Http\Controllers\Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');
// Route::get('/auth/login/google', 'App\Http\Controllers\SocialController@redirect');
// Route::get('/auth/login/google/redirect', 'App\Http\Controllers\SocialController@callback');

Route::get('get-global-acc', function()
{
    dd(config('global.global_acc'));
});
