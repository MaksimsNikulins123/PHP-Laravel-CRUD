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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// Route::post('/contacts/submit', function () {
//     // return "OK";
//     // return Request::all();
//     dd(Request::all());
// })->name('contact-form');
Route::get(
    '/contacts/all/{id}', 
    'App\Http\Controllers\ContactsController@showOneMessage'
    )->name('contact-data-one');

Route::get(
    '/contacts/all/{id}/update', 
    'App\Http\Controllers\ContactsController@updateMessage'
    )->name('contact-update');

Route::post(
    '/contacts/all/{id}/update', 
    'App\Http\Controllers\ContactsController@updateMessageSubmit'
    )->name('contact-update-submit');

Route::get(
    '/contacts/all/{id}/delete', 
    'App\Http\Controllers\ContactsController@deleteMessage'
    )->name('contact-delete');

Route::get(
    '/contacts/all', 
    'App\Http\Controllers\ContactsController@allData'
    )->name('contact-data');

Route::post(
    '/contacts/submit', 
    'App\Http\Controllers\ContactsController@submit'
    )->name('contact-form');