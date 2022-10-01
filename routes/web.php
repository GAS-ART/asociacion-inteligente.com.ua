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


Route::get('/{locale}/poster/concert_ponomariov_and_dzidzio', function ($locale) {
   
   if (! in_array($locale, ['es', 'ru'])) { 

      abort(404);

   }  else if ($locale == 'es') {

      App::setLocale('es');
      return view('ponomarev_and_dzidzio');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('ponomarev_and_dzidzio');

 }
})->name('poster.concert_ponomariov_and_dzidzio.lang');

Route::get('/{locale}/poster/charity_dinner', function ($locale) {
   
   if (! in_array($locale, ['es', 'ru'])) { 

      abort(404);

   }  else if ($locale == 'es') {

      App::setLocale('es');
      return view('charity_dinner');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('charity_dinner');

 }
})->name('poster.charity_dinner.lang');

Route::get('/{locale}/about-us', function ($locale) {
   
   if (! in_array($locale, ['es', 'ru'])) { 

      abort(404);

   }  else if ($locale == 'es') {

      App::setLocale('es');
      return view('about_us');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('about_us');

 }
})->name('about_us.lang');

Route::get('/{locale}/services', function ($locale) {
   
   if (! in_array($locale, ['es', 'ru'])) { 

      abort(404);

   }  else if ($locale == 'es') {

      App::setLocale('es');
      return view('services');

   }
   else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('services');

 }
})->name('services.lang');