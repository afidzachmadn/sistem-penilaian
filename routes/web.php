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


//------------------------ essentials -------------------------------//

Route::get('/',"AuthController@login");

Route::get('/login', "AuthController@login");

Route::post('/login-proses', "AuthController@bacadatabase");

Route::get('/logout', "AuthController@logout");

Route::get('/dashboard', 'HomeController@dashboard');

Route::get('/nilai-diri-sendiri', 'HomeController@nilai_diri_sendiri');

Route::post('/nilai-diri-sendiri-proses', 'HomeController@nilai_diri_sendiri_proses');

Route::get('/nilai-rekan-kerja', 'HomeController@nilai_rekan_kerja');

Route::post('/nilai-rekan-kerja-proses', 'HomeController@nilai_rekan_kerja_proses');

Route::get('/komplain-nilai', 'HomeController@komplain_nilai');

Route::get('/report-nilai-diri-sendiri', 'HomeController@report_nilai_diri_sendiri');

Route::get('/report-nilai-dari-rekan-kerja-dan-atasan', 'HomeController@report_nilai_dari_rekan_kerja_dan_atasan');

Route::get('/data-diri', 'HomeController@data_diri');

Route::post('/edit-data-diri-proses', 'HomeController@edit_data_diri_proses');







//-------------------------------------------------------------------//