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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/wel', function(){
  return view('wel');
});

// further routing
Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', function () {
    return view('articles');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/developers', function () {
    return view('developers');
});
Route::get('articles/cc1', function(){
	return view('cc1');
});
Route::get('articles/cc2', function(){
	return view('cc2');
});
Route::get('articles/cc3', function(){
	return view('cc3');
});
Route::get('articles/os1', function(){
	return view('os1');
});
Route::get('articles/os2', function(){
	return view('os2');
});
Route::get('articles/os3', function(){
	return view('os3');
});
Route::get('articles/cn1', function(){
	return view('cn1');
});
Route::get('articles/cn2', function(){
	return view('cn2');
});
Route::get('articles/cn3', function(){
	return view('cn3');
});
Route::get('articles/ds1', function(){
	return view('ds1');
});
Route::get('articles/ds2', function(){
	return view('ds2');
});
Route::get('articles/ds3', function(){
	return view('ds3');
});
