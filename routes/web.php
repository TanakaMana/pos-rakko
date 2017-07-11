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

Route::get('/', 'PostsController@index');
Route::resource('posts', 'PostsController');
Route::resource('users', 'UsersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


$this->get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
$this->post('admin/login', 'Admin\Auth\LoginController@login');
$this->post('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
// Registration Routes...
$this->get('admin/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
$this->post('admin/register', 'Admin\Auth\RegisterController@register');
