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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']],function(){
    Route::get('/datadiri','DataDiriController@index');
    Route::post('/datadiri/create','DataDiriController@create'); 
    Route::get('/datadiri/{id}/edit','DataDiriController@edit'); 
    Route::post('/datadiri/{id}/update','DataDiriController@update'); 
    Route::get('/datadiri/{id}/delete','DataDiriController@delete'); 
    Route::get('/datadiri/{id}/profile','DataDiriController@profile'); 
});

/*Route::group(['middleware' => ['auth','checkRole:admin,pemohon']],function(){
    Route::get('/dashboard','DashboardController@index');
});*/

/*Route::get('/datadiri', function () {
    return 'Halaman Admin';
})->middleware(['role', 'auth']);


