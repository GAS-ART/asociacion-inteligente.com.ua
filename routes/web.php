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

Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');
Route::post('feedback', 'App\Http\Controllers\ContactController@feedBackForm')->name('contactForm');
Route::post('feedback-question', 'App\Http\Controllers\ContactController@questionForm')->name('contactFormQuestion');

Route::get('/', function () {App::setLocale('ru'); return view('home');})->name('index');
Route::get('/ru', function () {App::setLocale('ru'); return  redirect('/');});

Route::get('/{locale}', function ($locale) {
   
    if (! in_array($locale, ['es', 'ru'])) { 
 
       abort(404);
 
    }  else if ($locale == 'es') {
 
       App::setLocale('es');
       return view('home');
 
    }
    else if ($locale == 'ru') {
 
     App::setLocale('ru');
     return view('home');
 
  }
 })->name('home.lang');

 Route::get('/{locale}/contacts', function ($locale) {
   
   if (! in_array($locale, ['es', 'ru'])) { 

      abort(404);

   }  else if ($locale == 'es') {

      App::setLocale('es');
      return view('contacts');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('contacts');

 }
})->name('contacts.lang');

Route::get('/{locale}/poster', function ($locale) {
   
   if (! in_array($locale, ['es', 'ru'])) { 

      abort(404);

   }  else if ($locale == 'es') {

      App::setLocale('es');
      return view('poster');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('poster');

 }
})->name('poster.lang');