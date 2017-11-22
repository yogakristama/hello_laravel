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
    return "hello from home";
});

Route::get('/about', function () {
    return "this is about page";
});

//belajar route parameter kuncinya pakai kurawal
Route::get('/profile/{username?}', function ($username="") {
    return "This is profile page for user: ".$username;
});

Route::get('/profile/{username}/comment/{id}', function ($username, $id) {
    return "Comment ID: ".$id." for user ".$username;
});