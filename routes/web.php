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

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('jabatan', 'JabatanController')->middleware('auth');
// Route::resource('pendidikan', 'PendidikanController')->middleware('auth');
// Route::resource('status', 'StatusController')->middleware('auth');
// Route::resource('karyawan', 'KaryawanController')->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    
    
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });
    
    Route::resource('jabatan', 'JabatanController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('status', 'StatusController');
    Route::resource('karyawan', 'KaryawanController');
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard.dashboard'); 

});