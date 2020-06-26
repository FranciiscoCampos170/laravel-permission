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

Auth::routes();

Route::get('/getPostByUser', 'BlogController@getPostByUser');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addRole', 'BlogController@addRole')->name('add.role');
Route::get('/addPermission', 'BlogController@addPermission')->name('add.permission');
Route::get('/addPermissonToRole/{id}', 'BlogController@givePermissionToRole')->name('add.permission.to.role');
Route::get('/addRoleToUser', 'BlogController@giveRoleToUser')->name('add.role.to.user');
Route::get('/getUserPermission', 'BlogController@getUserPermission')->name('get.user.permission');
Route::get('/getAllRoles', 'BlogController@getAllRoles')->name('get.all.roles');
