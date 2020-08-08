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
    return view('auth.signin');
});

Route::get('/signin', 'SignInController@index');
Route::get('/signup', 'SignInController@signup');
Route::post('/signup', [
    'uses' => 'SignInController@postSignUp',
    'as' => 'signup'
]);
Route::post('/createnew', [
    'uses' => 'SignInController@createNewUser',
    'as' => 'createnew'
]);
Route::post('/updateinfo', [
    'uses' => 'SignInController@updateinfo',
    'as' => 'updateinfo'
]);
Route::post('/signin', [
    'uses' => 'SignInController@postSignIn',
    'as' => 'signin'
]);
Route::post('/settings/bookings', [
    'uses' => 'AdminHome@bookingsettings',
    'as' => 'bookingsettings'
]);
Route::post('/booknow/save', [
    'uses' => 'AdminHome@bookappointment',
    'as' => 'bookappointment'
]);
Route::get('/forget-password', 'SignInController@forget');
Route::get('/home-admin', 'AdminHome@index');
Route::get('/clients', 'AdminHome@clients');
Route::get('/home-user', 'UserHomeController@index');
Route::get('/user/create', 'AdminHome@newuser');
Route::get('/booknow', 'AdminHome@booknow');
Route::get('/settings', 'AdminHome@settings');
Route::get('/calender', 'AdminHome@calender');
Route::get('/settings/profile', 'AdminHome@profile');
Route::get('/settings/email', 'AdminHome@email');
Route::get('/settings/booking', 'AdminHome@bookings');
Route::get('/appointments', 'AdminHome@allappointments');
