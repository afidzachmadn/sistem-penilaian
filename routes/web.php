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





Route::get('/nilai-pimpinan', 'HomeController@nilai_ketua_tim');
Route::post('/nilai-pimpinan-proses', 'HomeController@nilai_ketua_tim_proses');
Route::get('/riwayat-penilaian-untuk-pimpinan', 'HomeController@riwayat_penilaian_untuk_ketua_tim');
Route::get('/report-nilai-dari-pimpinan', 'HomeController@report_nilai_dari_ketua_tim');


Route::get('/nilai-pimpinan', 'HomeController@nilai_pimpinan');
Route::post('/nilai-pimpinan-proses', 'HomeController@nilai_pimpinan_proses');
Route::get('/riwayat-penilaian-untuk-pimpinan', 'HomeController@riwayat_penilaian_untuk_pimpinan');
Route::get('/report-nilai-dari-pimpinan', 'HomeController@report_nilai_dari_pimpinan');


Route::get('/komplain-nilai', 'HomeController@komplain_nilai');

Route::get('/data-diri', 'HomeController@data_diri');

Route::post('/edit-data-diri-proses', 'HomeController@edit_data_diri_proses');

/* -------------------------------------------------------------------------------------------------------------- */


















/*----------------------------------------------- KETUA TIM -------------------------------------------------------- */

Route::get('/ketua-tim/dashboard', 'HomeController_2@dashboard');

Route::get('/ketua-tim/data-diri', 'HomeController_2@data_diri');

Route::post('/ketua-tim/edit-data-diri-proses', 'HomeController_2@edit_data_diri_proses');


Route::get('/ketua-tim/nilai-diri-sendiri', 'HomeController_2@nilai_diri_sendiri');
Route::post('/ketua-tim/nilai-diri-sendiri-proses', 'HomeController_2@nilai_diri_sendiri_proses');
Route::get('/ketua-tim/riwayat-penilaian-diri-sendiri', 'HomeController_2@riwayat_penilaian_diri_sendiri');
Route::get('/ketua-tim/report-nilai-diri-sendiri', 'HomeController_2@report_nilai_diri_sendiri');

Route::get('/ketua-tim/nilai-rekan-kerja', 'HomeController_2@nilai_rekan_kerja');
Route::post('/ketua-tim/nilai-rekan-kerja-proses', 'HomeController_2@nilai_rekan_kerja_proses');
Route::get('/ketua-tim/riwayat-penilaian-rekan-kerja', 'HomeController_2@riwayat_penilaian_rekan_kerja');
Route::get('/ketua-tim/report-nilai-dari-rekan-kerja', 'HomeController_2@report_nilai_dari_rekan_kerja');

Route::get('/ketua-tim/nilai-karyawan', 'HomeController_2@nilai_karyawan');
Route::post('/ketua-tim/nilai-karyawan-proses', 'HomeController_2@nilai_karyawan_proses');
Route::get('/ketua-tim/riwayat-penilaian-karyawan', 'HomeController_2@riwayat_penilaian_karyawan');
Route::get('/ketua-tim/report-nilai-dari-karyawan', 'HomeController_2@report_nilai_dari_karyawan');

Route::get('/ketua-tim/nilai-pimpinan', 'HomeController_2@nilai_pimpinan');
Route::post('/ketua-tim/nilai-pimpinan-proses', 'HomeController_2@nilai_pimpinan_proses');
Route::get('/ketua-tim/riwayat-penilaian-pimpinan', 'HomeController_2@riwayat_penilaian_pimpinan');
Route::get('/ketua-tim/report-nilai-dari-pimpinan', 'HomeController_2@report_nilai_dari_pimpinan');
/* ------------------------------------------------------------------------------------------------------------- */























/*--------------------------------------------------- KETUA TIM -------------------------------------------------------- */

Route::get('/pimpinan/dashboard', 'HomeController_3@dashboard');

Route::get('/pimpinan/data-diri', 'HomeController_3@data_diri');

Route::post('/pimpinan/edit-data-diri-proses', 'HomeController_3@edit_data_diri_proses');


Route::get('/pimpinan/nilai-diri-sendiri', 'HomeController_3@nilai_diri_sendiri');
Route::post('/pimpinan/nilai-diri-sendiri-proses', 'HomeController_3@nilai_diri_sendiri_proses');
Route::get('/pimpinan/riwayat-penilaian-diri-sendiri', 'HomeController_3@riwayat_penilaian_diri_sendiri');
Route::get('/pimpinan/report-nilai-diri-sendiri', 'HomeController_3@report_nilai_diri_sendiri');

Route::get('/pimpinan/nilai-rekan-kerja', 'HomeController_3@nilai_rekan_kerja');
Route::post('/pimpinan/nilai-rekan-kerja-proses', 'HomeController_3@nilai_rekan_kerja_proses');
Route::get('/pimpinan/riwayat-penilaian-rekan-kerja', 'HomeController_3@riwayat_penilaian_rekan_kerja');
Route::get('/pimpinan/report-nilai-dari-rekan-kerja', 'HomeController_3@report_nilai_dari_rekan_kerja');

Route::get('/pimpinan/nilai-karyawan', 'HomeController_3@nilai_karyawan');
Route::post('/pimpinan/nilai-karyawan-proses', 'HomeController_3@nilai_karyawan_proses');
Route::get('/pimpinan/riwayat-penilaian-karyawan', 'HomeController_3@riwayat_penilaian_karyawan');
Route::get('/pimpinan/report-nilai-dari-karyawan', 'HomeController_3@report_nilai_dari_karyawan');

Route::get('/pimpinan/nilai-ketua-tim', 'HomeController_3@nilai_ketua_tim');
Route::post('/pimpinan/nilai-ketua-tim-proses', 'HomeController_3@nilai_ketua_tim_proses');
Route::get('/pimpinan/riwayat-penilaian-ketua-tim', 'HomeController_3@riwayat_penilaian_ketua_tim');
Route::get('/pimpinan/report-nilai-dari-ketua-tim', 'HomeController_3@report_nilai_dari_ketua_tim');





