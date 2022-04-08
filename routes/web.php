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

// Landing Page
Route::get('/', 'LandingPageController@LandingPage')->middleware('guest')->name('/');
Route::get('/find-my-order', 'LandingPageController@FindMyOrder')->middleware('guest');
Route::post('/find-my-order/search', 'LandingPageController@Search')->middleware('guest');

// Login & Logout
Route::get('/login', 'LoginController@index')->middleware('guest')->name('login');
Route::post('/postLogin', 'LoginController@login');
Route::get('/logout', 'LoginController@logout')->middleware('auth');

// Dashboard
Route::get('/dashboard', 'DashboardController@Dashboard')->middleware('auth');

// Manajemen Data Pada Landing Page
Route::get('/foto-slider', 'LandingPageController@FotoSlider')->middleware('auth');
Route::post('/foto-slider/addFotoSlider', 'LandingPageController@AddFotoSlider')->middleware('auth');
Route::get('/foto-slider/{id}/deleteFotoSlider', 'LandingPageController@DeleteFotoSlider')->middleware('auth');

// Manajemen Data Pemesanan
Route::get('/pemesanan', 'PemesananController@Pemesanan')->middleware('auth');
Route::get('/pemesanan/tambah', 'PemesananController@Pemesanan')->middleware('auth');
Route::post('/pemesanan/addPemesanan', 'PemesananController@AddPemesanan')->middleware('auth');
Route::get('/pemesanan/{id}/editPemesanan', 'PemesananController@EditPemesanan')->middleware('auth');
Route::post('/updatePemesanan/{id}', 'PemesananController@UpdatePemesanan')->middleware('auth');
Route::get('/pemesanan/{id}/deletePemesanan', 'PemesananController@DeletePemesanan')->middleware('auth');
Route::get('/pemesanan/{id}/detailPemesanan', 'PemesananController@DetailPemesanan')->middleware('auth');
