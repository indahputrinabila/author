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

// Route::get('/orangtua',function(){
// 	$or = App\orangtua::all();
// 	foreach ($or as $data) {
// 		echo $data->nama_ibu." dengan ";
// 		echo $data->nama_ayah." ";
// 		foreach ($data->anaks as $key) {
// 			echo "<li>$key->nama</li><br>";
// 		}
// 	}
// });

Route::get('/nama','MyController@index');

Route::get('/tampilan','MyController@tampilan');

Route::get('model','MyController@model');

Route::resource('orangtua','OrangTuaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('anak','AnakController');

Route::resource('author','AuthorController');

Route::resource('book','BookController');
