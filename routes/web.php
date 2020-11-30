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

Route::get('/', 'App\Http\Controllers\newsController@allNews', function () {
    return view('home');
})->name('home');
// Route::get('/', 'App\Http\Controllers\newsController@allNews')->name('NewsData');

Route::get('/download/', function () {
    return view('vers');
})->name('vers');

Route::get('/download', function () {
    return view('download');
})->name('download');

Route::get('/dev', function () {
    return view('dev');
})->name('dev');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/lib', function () {
    return view('lib');
})->name('lib');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/register', function () {
    return view('register');
})->name('reg');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/sendpost', function () {
    return view('sendPost');
})->name('sendPost');


Route::get('/post/{postid}', 'App\Http\Controllers\newsController@PostShow')->name('PostShower');
Route::get('/post/{postid}/edit', 'App\Http\Controllers\newsController@NewsEdit')->name('PostEdit');
Route::get('/post/{postid}/delete', 'App\Http\Controllers\newsController@PostDelete')->name('PostDelete');
Route::post('/post/{postid}/edit', 'App\Http\Controllers\newsController@editNews')->name('editNews');
Route::post('/reg/submit', 'App\Http\Controllers\newsController@submit')->name('form');

Auth::routes([
    'confirm' => false,
    'verify' => false,
]);


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
