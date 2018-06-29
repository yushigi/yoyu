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
    return view('welcome');
});

Route::get('yushi', function(){
    return view("yushigi");
}) ->name('yushikawaii');

Route::get('yo', function(){
    return view("yo");
}) ->name('yoyo');

Route::get('news', function(){
    return view("news");
}) ->name('news');

Route::get('contact', function(){
    return view("contact");
}) ->name('contact');
