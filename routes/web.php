<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(["auth"])->group(function($route) {

        $route->prefix('users')->group(function() use ($route) {            
        $route->get('/', 'App\Http\Controllers\User@listing')->name('user.list');
        $route->post('/', 'App\Http\Controllers\User@store')->name('user.store');
        $route->get('{id}', 'App\Http\Controllers\User@view')->name('user.view');
        $route->put('{id}', 'App\Http\Controllers\User@put')->name('user.put');
        $route->delete('{id}', 'App\Http\Controllers\User@delete')->name('user.delete');
        $route->get('/create', 'App\Http\Controllers\User@create')->name('user.create');
    });
    
});