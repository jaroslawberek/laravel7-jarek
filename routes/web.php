<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('loading-circle', function () {
    return view('loading-circle');
})->name('loading-circle');
Route::get('loading-ellipsis', function () {
    return view('loading-ellipsis');
})->name('loading-ellipsis');

Route::get('/', 'FrontendController@index')->name('app');




Route::group(['prefix'=>'admin', 'middleware'=>'role:superadministrator'],function(){ 
    Route::get('/', 'BackendController@index')->name('adminIndex');
    Route::resource('nationals', 'NationalController');
});

Auth::routes();
