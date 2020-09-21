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
	return view('home');
});

Route::get('/about', function () {
	return view('about');
});

// CLOSURE
Route::get('/profil', function () {
	return "Profil Siswa";
})->name('profil');

// ROUTE NAME
Route::get('/testname', function () {
	return route('profil');
});

// PARAMETER
Route::get('/profil/{id}', function ($id) {
	return $id;
});

// CONTROLLER
Route::get('/controller', 'PagesController@show');

// RESOURCE
Route::resource('students', 'StudentController');