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


$this->get('admin/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
$this->post('admin/login', 'AdminAuth\LoginController@login');
$this->post('admin/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
// Registration Routes...
$this->get('admin/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.register');
$this->post('admin/register', 'AdminAuth\RegisterController@register');
