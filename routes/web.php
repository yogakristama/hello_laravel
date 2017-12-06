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

$controller = function(){
    return view ('welcome');
};

route::get('/',$controller);

//membuat controller menggunakan class
route::get('/welcome2',"UserController@welcome");
 //"UserController@welcome = UserController = class dan welcome adalah method

 route::get('/about',"UserController@about");

 route::get('/contact',"UserController@contact");

 route::get('/product/discount',"ProductController@discount");

 route::get('/suhu',"SuhuController@suhu");

 route::get('/products',"ProductController@index");

 route::get('/products/add',"ProductController@add");

 route::post('/products/add',"ProductController@add");

 route::get('/products/detail/{product_id}',"ProductController@detail");


 route::get('/products/edit/{product_id}',"ProductController@edit");

 route::post('/products/edit/{product_id}',"ProductController@edit");
 
 route::post('/products/delete',"ProductController@delete");

 

// Route::get('/', function () {
//     return "hello from home";
// });

// Route::get('/about', function () {
//     return "this is about page";
// });

// //belajar route parameter kuncinya pakai kurawal
// Route::get('/profile/{username?}', function ($username="") {
//     return "This is profile page for user: ".$username;
// });

// Route::get('/profile/{username}/comment/{id}', function ($username, $id) {
//     return "Comment ID: ".$id." for user ".$username;
// });