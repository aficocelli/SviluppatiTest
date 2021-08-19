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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admins show dashboard

Route::get('/admin', 'AdminController@index')->name('admin.adminDashboard');

// admin login

Route::get('/admin/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('show_admin_login');

// authenticate admin

Route::post('/admin/login', 'Auth\AdminLoginController@authenticate' )->name('authenticate');