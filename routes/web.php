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

// Route::get('/posts/{id}',function($myid){


//     $posts = [
//         1 => ['title'=>'Zakaria profile'],
//         2 => ['title'=>'Hala Profile'],
//     ];
//     return view('posts.show',['$data' => $posts[$myid]]);
// });
// Route::get('/posts/{id}/{auteur?}', 'HomeController@posts')->name('Posts') ;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

//Route::view('/', ('home'));
Route::get('/', ('HomeController@home'));

// Route::get('/about', function () {
//     return view('about');
// });
//Route::get('/home', ('HomeController@home')) ;

// Route::get('/about', ('HomeController@about')) ;

// Route::resource('/posts','PosstController');

// Route::resource('/posts','PosstController')->only(['index', 'show', 'create', 'store']);

Route::resource('/posts', 'PosstController')->except('destroy'); 

