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



Route::get('/', 'HomeController@index')->name('home');
// tutta la rotta ha il nome home

Route::get('about-us', 'StaticPageController@aboutUs')->name('static_page.about_us');

Route::get('how-it-works', 'StaticPageController@howItWorks')->name('how_it_works');
