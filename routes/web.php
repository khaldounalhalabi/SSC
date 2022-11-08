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



Route::get('/test' , function (){
    return view('admin.index') ;
})->name('test') ;




Route::prefix('admin')->namespace('App\Http\Controllers\admin')->group(function () {
    Route::get('/', 'dashboard\DashboardController@dashboard')->name('admin.dashboard');
    Route::get('/carousel', 'CarouselController@index')->name('admin.carousel');
    Route::get('carousel/edit/{id}' , 'CarouselController@editPage')->name('admin.carousel.editPage') ;
    Route::post('carousel/doEdit/{id}' , 'CarouselController@doEdit')->name('admin.carousel.doEdit') ;
    Route::get('about/edit', 'AboutController@editPage')->name('admin.about.editPage');
    Route::post('about/doEdit', 'AboutController@doEdit')->name('admin.about.doEdit');
    Route::get('/services' , 'ServiceController@index')->name('admin.service.index') ;
    Route::get('/service/{id}', 'ServiceController@editPage')->name('admin.service.editPage');
    Route::post('/service/edit/{id}', 'ServiceController@doEdit')->name('admin.service.doEdit');
    Route::get('/contact/edit', 'ContactController@editPage')->name('admin.contact.editPage');
    Route::post('/contact/doEdit', 'ContactController@doEdit')->name('admin.contact.doEdit');
}) ;



Route::namespace('App\Http\Controllers\front')->group(function () {
    Route::view('/contact' , 'front.contact')->name('front.contact') ;
    Route::post('/contact/send' , 'SendMessageController@send')->name('front.send.message') ;
    Route::get('/', 'IndexController@index')->name('front.index');
    Route::get('/about/learnmore', 'MoreAbout@get')->name('front.about.more');
    Route::get('service/{id}', 'ServiceMoreController@get')->name('front.service.more');
}) ;
