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



/*------------------------------------------- KARYAWAN --------------------------------------------------------- */

Route::get('/',"AuthController@login");

Route::get('/login', "AuthController@login");

Route::post('/login-proses', "AuthController@bacadatabase");

Route::get('/logout', "AuthController@logout");

Route::get('/dashboard', 'HomeController@dashboard');


Route::get('/nilai-diri-sendiri', 'HomeController@nilai_diri_sendiri');
Route::post('/nilai-diri-sendiri-proses', 'HomeController@nilai_diri_sendiri_proses');
Route::get('/riwayat-penilaian-diri-sendiri', 'HomeController@riwayat_penilaian_diri_sendiri');
Route::get('/report-nilai-diri-sendiri', 'HomeController@report_nilai_diri_sendiri');



Route::get('/nilai-rekan-kerja', 'HomeController@nilai_rekan_kerja');
Route::post('/nilai-rekan-kerja-proses', 'HomeController@nilai_rekan_kerja_proses');
Route::get('/riwayat-penilaian-untuk-karyawan', 'HomeController@riwayat_penilaian_untuk_karyawan');
Route::get('/report-nilai-dari-rekan-kerja', 'HomeController@report_nilai_dari_rekan_kerja');





Route::get('/nilai-ketua-tim', 'HomeController@nilai_ketua_tim');
Route::post('/nilai-ketua-tim-proses', 'HomeController@nilai_ketua_tim_proses');
Route::get('/riwayat-penilaian-untuk-ketua-tim', 'HomeController@riwayat_penilaian_untuk_ketua_tim');
Route::get('/report-nilai-dari-ketua-tim', 'HomeController@report_nilai_dari_ketua_tim');


Route::get('/nilai-pimpinan', 'HomeController@nilai_pimpinan');
Route::post('/nilai-pimpinan-proses', 'HomeController@nilai_pimpinan_proses');
Route::get('/riwayat-penilaian-untuk-pimpinan', 'HomeController@riwayat_penilaian_untuk_pimpinan');
Route::get('/report-nilai-dari-pimpinan', 'HomeController@report_nilai_dari_pimpinan');


Route::get('/komplain-nilai', 'HomeController@komplain_nilai');

Route::get('/data-diri', 'HomeController@data_diri');

Route::post('/edit-data-diri-proses', 'HomeController@edit_data_diri_proses');

/* -------------------------------------------------------------------------------------------------------------- */




Route::get('/dashboard-ketua-tim', 'HomeController_2@dashboard');
