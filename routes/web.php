<?php

use Illuminate\Support\Facades\App;
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

Route::get('/locale/{locale}',  'LanguagesController@changeLocale')->name('locale');
Route::post('feedback', 'ContactController@feedBackForm')->name('contactForm');
Route::post('feedback-question', 'ContactController@questionForm')->name('contactFormQuestion');

Route::get('/', function () {App::setLocale('ru'); return view('home');})->name('index');
Route::get('/ru', function () {App::setLocale('ru'); return  redirect('/');});
Route::get('/es', function () {App::setLocale('es'); return  view('home');});

Route::get('/{locale}', 'LanguagesController@routing')->name('home.lang');
Route::get('/{locale}/contacts', 'LanguagesController@routing')->name('contacts.lang');
Route::get('/{locale}/poster', 'LanguagesController@routing')->name('poster.lang');
Route::get('/{locale}/poster/concert_ponomariov_and_dzidzio', 'LanguagesController@routing')->name('poster.concert_ponomariov_and_dzidzio.lang');