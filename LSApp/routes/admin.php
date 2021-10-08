<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group([
    // 'namespace' => 'Auth',
], function () {
    // Authentication Routes...
    Route::get('login', 'App\Http\Controllers\AuthAdmin\LoginController@showLoginForm')->name('login_page');
    Route::post('login', 'App\Http\Controllers\AuthAdmin\LoginController@login')->name('login');
    Route::post('logout', 'App\Http\Controllers\AuthAdmin\LoginController@logout')->name('logout');
    Route::get('register', 'App\Http\Controllers\AuthAdmin\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'App\Http\Controllers\AuthAdmin\RegisterController@register')->name('register');
});

Route::group([
    'middleware' => [
        'auth:admin',
    ],
], function () {
    Route::get('/', 'App\Http\Controllers\AdminController@index')->name('dashboard');
    Route::get('home', 'App\Http\Controllers\AdminController@index')->name('dashboard');
    Route::get('dashboard', 'App\Http\Controllers\AdminController@index')->name('dashboard');
});
