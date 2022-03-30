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
 
Route::get('user-form','UserController@insertuser')->name('user-form');
Route::post('insertdata','UserController@insert')->name('insertdata');
Route::get('user-login', 'UserController@userLogin')->name('user-login'); 
Route::post('login', 'UserController@postLogin')->name('login'); 
Route::group(['middleware' => ['User']], function() {
   Route::get('user-dashboard','UserController@userhome')->name('user-dashboard');
   Route::get('user-logout','UserController@logout')->name('user-logout');
});



Route::get('forget-password', 'ForgetPasswordController@getEmail')->name('forget-password');
Route::post('send-password', 'ForgetPasswordController@postEmail')->name('send-password');
Route::get('reset-password/{token}', 'ResetPasswordController@getPassword');
Route::post('change-password', 'ResetPasswordController@updatePassword')->name('change-password');



Route::get('admin-form','AdminController@insertadmin')->name('admin-form');
Route::Post('create','AdminController@insert')->name('create'); 
Route::get('admin-login', 'AdminController@adminLogin')->name('admin-login'); 
Route::post('view', 'AdminController@postLogin')->name('view'); 

Route::group(['middleware' => ['Admin']], function() {
Route::get('admin-dashboard','AdminController@adminhome')->name('admin-dashboard');
Route::get('admin-logout','AdminController@destroy')->name('admin-logout');
});
