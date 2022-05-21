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