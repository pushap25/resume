<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/register', 'HomeController@index')->name('home');

Route::get('/upload','HomeController@upload')->name('upload');

Route::get('/skills','Front\SkillsController@index')->name('skills');

Route::get('/gal_content','Front\GalleryController@show')->name('gal_content');

Route::resource('acads','Front\AcademicsController');

Route::resource('projects','Front\ProjectsController');

Route::resource('work','Front\WorkExperienceController');

Route::resource('message','Front\ContactsController');

Route::resource('download_content','Front\GalleryController');

