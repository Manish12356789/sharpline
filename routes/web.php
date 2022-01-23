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
// Route::get('login/', [UserController::class, 'blog'])->name('blog');


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('services/', [UserController::class, 'services'])->name('services');
Route::get('packages/', [UserController::class, 'packages'])->name('packages');
Route::get('contact/', [UserController::class, 'contact'])->name('contact');
Route::get('careers/', [UserController::class, 'careers'])->name('careers');
Route::get('book/', [UserController::class, 'book'])->name('book');
Route::get('blog/', [UserController::class, 'blog'])->name('blog');
Route::get('search/', [UserController::class, 'search'])->name('search');

Route::get('about/', [UserController::class, 'about'])->name('about');
Route::get('services/{id}', [UserController::class, 'service'])->name('service_single');
Route::get('career/save', [UserController::class, 'saveCareer'])->name('career.save');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin','middleware' => 'authadmin'], function () {
	// Admin Dashboard
	Route::get('/dashboard', admin\DashboardController::class .'@index')->name('admin.dashboard');

	Route::get('/slider-image', admin\SliderImageController::class .'@index')->name('admin.sliderImage');
	Route::get('/slider-image/add', admin\SliderImageController::class .'@create')->name('admin.slider.add');
	Route::post('/slider-image/store', admin\SliderImageController::class .'@store')->name('admin.slider.store');
	Route::get('/slider-image/edit/{id}', admin\SliderImageController::class .'@edit')->name('admin.slider.edit');
	Route::post('/slider-image/update/{id}', admin\SliderImageController::class .'@update')->name('admin.slider.update');
	Route::get('/slider-image/delete/{id}', admin\SliderImageController::class .'@destroy')->name('admin.slider.destroy');

	Route::get('/services/all', [App\Http\Controllers\admin\ServiceController::class, 'index'])->name('admin.service');
	// Route::get('/services/add', admin\ServiceController::class .'@create')->name('admin.service.add');
	// Route::post('/services/store', admin\ServiceController::class .'@store')->name('admin.service.store');
	// Route::get('/services/edit/{id}', admin\ServiceController::class .'@edit')->name('admin.service.edit');
	// Route::post('/services/update/{id}', admin\ServiceController::class .'@update')->name('admin.service.update');
	// Route::get('/services/delete/{id}', admin\ServiceController::class .'@destroy')->name('admin.service.destroy');

	Route::get('/about/about', admin\AboutUsController::class .'@index')->name('admin.about.about');
	Route::get('/about/add', admin\AboutUsController::class .'@create')->name('admin.about.add');
	Route::post('/about/store', admin\AboutUsController::class .'@store')->name('admin.about.store');
	Route::get('/about/edit/{id}', admin\AboutUsController::class .'@edit')->name('admin.about.edit');
	Route::post('/about/update/{id}', admin\AboutUsController::class .'@update')->name('admin.about.update');
	Route::get('/about/delete/{id}', admin\AboutUsController::class .'@destroy')->name('admin.about.destroy');

	Route::get('/contact/all', admin\ContactController::class .'@index')->name('admin.contact.contact');
	Route::get('/contact/edit/{id}', admin\ContactController::class .'@edit')->name('admin.contact.edit');
	Route::post('/contact/update/{id}', admin\ContactController::class .'@update')->name('admin.contact.update');
	Route::get('/contact/delete/{id}', admin\ContactController::class .'@destroy')->name('admin.contact.destroy');

	Route::get('/book/all', admin\OrderController::class .'@index')->name('admin.order.order');
	Route::get('/book/edit/{id}', admin\OrderController::class .'@edit')->name('admin.order.edit');
	Route::post('/book/update/{id}', admin\OrderController::class .'@update')->name('admin.order.update');
	Route::get('/book/delete/{id}', admin\OrderController::class .'@destroy')->name('admin.order.destroy');

	Route::get('/testimonial/all', admin\TestimonialController::class .'@index')->name('admin.testimonial');
	Route::get('/testimonial/add', admin\TestimonialController::class .'@create')->name('admin.testimonial.add');
	Route::post('/testimonial/store', admin\TestimonialController::class .'@store')->name('admin.testimonial.store');
	Route::get('/testimonial/edit/{id}', admin\TestimonialController::class .'@edit')->name('admin.testimonial.edit');
	Route::post('/testimonial/update/{id}', admin\TestimonialController::class .'@update')->name('admin.testimonial.update');
	Route::get('/testimonial/delete/{id}', admin\TestimonialController::class .'@destroy')->name('admin.testimonial.destroy');

	Route::get('/blog/all', admin\BlogController::class .'@index')->name('admin.blog');
	Route::get('/blog/add', admin\BlogController::class .'@create')->name('admin.blog.add');
	Route::post('/blog/store', admin\BlogController::class .'@store')->name('admin.blog.store');
	Route::get('/blog/edit/{id}', admin\BlogController::class .'@edit')->name('admin.blog.edit');
	Route::post('/blog/update/{id}', admin\BlogController::class .'@update')->name('admin.blog.update');
	Route::get('/blog/delete/{id}', admin\BlogController::class .'@destroy')->name('admin.blog.destroy');

	Route::get('/career/all', admin\CareerController::class .'@index')->name('admin.career');
	Route::get('/career/add', admin\CareerController::class .'@create')->name('admin.career.add');
	Route::post('/career/store', admin\CareerController::class .'@store')->name('admin.career.store');
	Route::get('/career/edit/{id}', admin\CareerController::class .'@edit')->name('admin.career.edit');
	Route::post('/career/update/{id}', admin\CareerController::class .'@update')->name('admin.career.update');
	Route::get('/career/delete/{id}', admin\CareerController::class .'@destroy')->name('admin.career.destroy');

	Route::get('/company-contacts', admin\CompanyContactController::class .'@index')->name('admin.companyContacts');
	Route::get('/company-contacts/add', admin\CompanyContactController::class .'@create')->name('admin.companyContact.add');
	Route::post('/company-contacts/store', admin\CompanyContactController::class .'@store')->name('admin.companyContact.store');
	Route::get('/company-contacts/edit/{id}', admin\CompanyContactController::class .'@edit')->name('admin.companyContact.edit');
	Route::post('/company-contacts/update/{id}', admin\CompanyContactController::class .'@update')->name('admin.companyContact.update');

});