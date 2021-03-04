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

Route::get('top','LubController@top');
Route::get('search','LubController@search');

Route::get('product',function(){
            return view('Lub.product');
        });

Route::get('add',function(){
            return view('Lub.add');
        });

Route::get('catalog','LubController@catalog');

Route::post('result','LubController@result');
Route::get('result','LubController@result');

Route::post('addConfirm','LubController@addConfirm');
/*Route::get('addConfirm',function(){
  return view('Lub.addConfirm');
});*/

Route::get('update',function(){
  return view('Lub.update');
});

Route::post('updateConfirm','LubController@updateConfirm');
/*Route::get('updateConfirm',function(){
  return view('Lub.updateConfirm');
});*/

Route::post('delete','LubController@delete');
Route::get('delete',function(){
  return view('Lub.delete');
});

Route::get('end',function(){
  return view('Lub.end');
});

Route::get('index','LubController@index');

Route::get('gazou',function(){
  return view('hello.gazou');
});
Route::post('gazou','LubController@gazou');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/menu', 'Test\MenuController@menu');
