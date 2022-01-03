<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', UserController::class .'@index', name)
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('services/', [UserController::class, 'services'])->name('services');
Route::get('packages/', [UserController::class, 'packages'])->name('packages');
Route::get('contact/', [UserController::class, 'contact'])->name('contact');
Route::get('careers/', [UserController::class, 'careers'])->name('careers');
Route::get('book/', [UserController::class, 'book'])->name('book');
Route::get('blog/', [UserController::class, 'blog'])->name('blog');
Route::get('about/', [UserController::class, 'about'])->name('about');
Route::get('services/{id}', [UserController::class, 'service'])->name('service_single');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware' => 'authadmin'], function () {
	// Admin Dashboard
	Route::get('/dashboard', admin\DashboardController::class .'@index')->name('admin.dashboard');

	Route::get('/services', admin\ServiceController::class .'@index')->name('admin.service');
	Route::get('/services/add', admin\ServiceController::class .'@create')->name('admin.service.add');
	Route::post('/services/store', admin\ServiceController::class .'@store')->name('admin.service.store');
	Route::get('/services/edit/{id}', admin\ServiceController::class .'@edit')->name('admin.service.edit');
	Route::post('/services/update/{id}', admin\ServiceController::class .'@update')->name('admin.service.update');
	Route::get('/services/delete/{id}', admin\ServiceController::class .'@destroy')->name('admin.service.destroy');

});