<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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
})->name('home');

Route::get('/about', function () {
	return view('about');
})->name('about');

// Data
Route::middleware(['auth'])->group(function ()
{
	Route::get('/data', [StudentController::class, 'create']);
	Route::post('/data', [StudentController::class, 'store']);
	Route::get('/data/{id}/edit', [StudentController::class, 'edit']);
	Route::patch('/data/{id}', [StudentController::class, 'update']);
	Route::get('/data/{id}', [StudentController::class, 'destroy']);
});

// Auth
Route::get('/login', [AuthController::class, 'getLogin'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
