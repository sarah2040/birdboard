<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {

    Route::get('/projects', 'App\Http\Controllers\ProjectsController@index');
    Route::get('/projects/create', 'App\Http\Controllers\ProjectsController@create');
    Route::get('/projects/{project}', 'App\Http\Controllers\ProjectsController@show');
    Route::post('/projects', [ProjectsController::class, 'store']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


Auth::routes();


