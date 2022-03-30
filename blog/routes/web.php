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

// CRUD Operation For Users//

Route::get('/insert','UserController@insertform')->name('insert');
Route::post('/create','UserController@insert')->name('create');
Route::get('show','UserController@index');
Route::get('edit/{id}','UserController@show');
Route::post('edit/{id}','UserController@edit');
Route::get('delete/{id}','UserController@delete');

// CRUD Operation For Category//

Route::get('/test','CategoryController@insertform')->name('test');
Route::post('/update','CategoryController@insert')->name('update');
Route::get('/display','CategoryController@table');
Route::get('editcategory/{id}','CategoryController@display');
Route::post('editcategory/{id}','CategoryController@change');
Route::get('deletecategory/{id}','CategoryController@drop');

// Insert Multiple address //

Route::get('/demo','AdminController@insertaddress')->name('demo');
Route::post('/add','AdminController@insert')->name('add');
Route::get('/retrive','AdminController@index');
Route::get('address/{id}','AdminController@show');
Route::get('deleteadmin/{id}','AdminController@drop');

// CRUD Operation Using Ajax//

Route::get('ajaxposts','PostController@insertvalue')->name('ajaxposts');
Route::post('ajaxcreate','PostController@insert')->name('ajaxcreate');
Route::get('table','PostController@index')->name('list.user');
Route::get('edit-ajax/{id}','PostController@show');
Route::post('edit-ajax/{id}','PostController@change')->name('editAjax');
Route::post('delete-ajax','PostController@drop')->name('delete');

// Insert Multiple Address Using Ajax//

Route::get('ajaxadd','AdminAjaxController@insertAjax')->name('ajaxadd');
Route::post('ajaxsave','AdminAjaxController@insert')->name('ajaxsave');
Route::get('address','AdminAjaxController@index')->name('list.admin');
Route::get('admin-address/{id}','AdminAjaxController@show');
Route::Post('delete-admin','AdminAjaxController@drop')->name('deleteAdmin');

//CRUD Operation for Category Using Ajax//

Route::get('categoryajax','CategoryAjaxController@categoryform')->name('categoryajax');
Route::post('createcategory','CategoryAjaxController@insert')->name('createcategory');
Route::get('category','CategoryAjaxController@index')->name('list.category');
Route::get('category-ajax-edit/{id}','CategoryAjaxController@show');
Route::post('category-ajax-edit/{id}','CategoryAjaxController@change')->name('updateAjax');
Route::post('delete-category','CategoryAjaxController@drop')->name('deleteCategory');

// Image Upload //
Route::get('image','ImageUploadController@insertimage')->name('image-upload');
Route::post('image-store','ImageUploadController@insert')->name('image-store');
Route::get('image-table','ImageUploadController@index')->name('image-table');
Route::get('delete-image/{id}','ImageUploadController@delete');

// Image Upload using Ajax //
Route::get('ajaximage','ImageAjaxController@ajaxinsert')->name('ajaximage');
Route::post('ajaximage','ImageAjaxController@insert')->name('ajaximage');
Route::get('ajax-image','ImageAjaxController@index')->name('list.images');
Route::post('delete-image','ImageAjaxController@drop')->name('delete-image');

Route::get('exportexcel', 'UserExportController@view');
Route::get('export', 'UserExportController@export')->name('export');
Route::get('generate-pdf','UserExportController@generatePDF')->name('generatePDF');
Route::get('export-csv', 'UserExportController@exportcsv')->name('export-csv');


