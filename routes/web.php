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

// Route::get('/', function () {
//     #return view('welcome');

//     return "hola mundo";
// });



// Route::get('/about', function () {

// 	$test = ['1','2','3']; 
    

//     return view('pages.about', compact('test'));

// });


Route::get('about', 'PagesController@home');

Route::get('/', 'PagesController@welcome');


