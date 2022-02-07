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
    return view('pages.home');
    // return view('pages.home');
});

Route::get('/bootstrap/{name}/{id}', function ($name,$id) {
    
    return 'Hello :'.$name.'your id is :'.$id;
    // return view('test');
});

//userController
Route::get('/myinfo', 'UserController@myinfo');
Route::get('/showupdateinfo', 'UserController@showupdateinfo');
Route::post('/updateinfo','UserController@updateinfo');
Route::get('/showchangepass', 'UserController@showchangepass');
Route::get('/allusers', 'UserController@allusers');
Route::get('/deleteuser/{id}', 'UserController@deleteuser');
Route::get('/upgradeuser/{id}', 'UserController@upgradeuser');
Route::get('/showupdate/{id}', 'UserController@showupdate');
Route::post('/changepass','UserController@changepass');
Route::post('/update','UserController@update');

//productController
Route::resource('products','productController');
Route::get('/myproduct','HomeController@myproduct');

//assignto
Route::get('/assignto/{id}', 'HomeController@assignto');
Route::post('/assign','HomeController@assign');


Route::get('/bootstrap', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('pages.about');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
