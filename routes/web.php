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
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('pages.about-us');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
// all converns
Route::get('/sister-concerns/jamco-entertainment', function () {
    return view('sister-concerns.jamco-entertainment');
});
Route::get('/sister-concerns/doi-haat', function () {
    return view('sister-concerns.doi-haat');
});
Route::get('/sister-concerns/jamco-agro-limited', function () {
    return view('sister-concerns.jamco-agro-limited');
});
Route::get('/sister-concerns/jamco-cafe-and-restaurant', function () {
    return view('sister-concerns.jamco-cafe-and-restaurant');
});
Route::get('/sister-concerns/jamco-resort', function () {
    return view('sister-concerns.jamco-resort');
});
Route::get('/sister-concerns/jamco-fashion', function () {
    return view('sister-concerns.jamco-fashion');
});
Route::get('/sister-concerns/jamco-construction', function () {
    return view('sister-concerns.jamco-construction');
});
Route::get('/blog', function () {
    return view('blog.blogs');
});
Route::get('/blog-details', function () {
    return view('blog.blog-details');
});
