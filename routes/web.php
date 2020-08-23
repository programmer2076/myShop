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
    return view('home');
});

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/waterfall/create', 'Product\WaterfallController@create')->name('waterfall.create');

Route::group(['prefix'=>'auth', 'namespace'=>'Backend', 'middleware'=>['master', 'verified']],function (){
Route::get('/', 'BackController@index')->name('auth');
Route::get('/users', 'UserController@index')->name('user');
Route::get('/users/edit/{user}', 'UserController@edit')->name('user.edit');
Route::post('/users/edit/{user}', 'UserController@update')->name('user.update');
Route::get('/users/confirm/{user}', 'UserController@delete')->name('user.confirm');
Route::get('/users/delete/{user}', 'UserController@destroy')->name('user.destroy');

Route::get('/roles', 'RoleController@index')->name('role');
Route::get('/roles/create', 'RoleController@create')->name('role.create');
Route::post('/roles/create', 'RoleController@store')->name('role.store');
Route::get('/roles/edit/{role}', 'RoleController@edit')->name('role.edit');
Route::post('/roles/edit/{role}', 'RoleController@update')->name('role.update');
Route::get('/roles/confirm/{role}', 'RoleController@delete')->name('role.confirm');
Route::get('/roles/delete/{role}', 'RoleController@destroy')->name('role.destroy');

Route::get('permissions', 'PermissionController@index')->name('permission');
Route::get('permissions/create', 'PermissionController@create')->name('permission.create');
Route::post('permissions/create', 'PermissionController@store')->name('permission.store');
Route::get('/permissions/edit/{permission}', 'permissionController@edit')->name('permission.edit');
Route::post('/permissions/edit/{permission}', 'permissionController@update')->name('permission.update');
Route::get('/permissions/confirm/{permission}', 'permissionController@delete')->name('permission.confirm');
Route::get('/permissions/delete/{permission}', 'permissionController@destroy')->name('permission.destroy');

Route::get('/product/create', 'ProductController@create')->name('product.create');
});

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['manager','verified']], function(){
    Route::get('/', 'EndController@index')->name('admin');
});
