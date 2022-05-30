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

// Route::get('/', function () {
//     return view('userhome');
// });

Auth::routes();

// ADMIN 
Route::get('/auth.login','AdminController@login');




Route::get('/admin', function() {
  return view('admin');
})->middleware('auth:admin');





// BERANDA

Route::get('/beranda', 'AdminController@beranda')->name('beranda');

// --EVIDENCE--

Route::get('/evidence', 'AdminController@evidence')->name('evidence');

Route::get('/tambahevidence', 'AdminController@tambahevidence');

Route::get('/evidence/edit/{id}','AdminController@edit');

Route::post('/evidence/update','AdminController@update');

Route::post('/evidence/store', 'AdminController@store');

Route::get('/evidence/hapus/{id}','AdminController@hapus');



// --PROBLEM--

Route::get('/problem', 'AdminController@problem')->name('problem');

Route::get('/problem/hapus/{id}','ProblemController@hapus');

Route::get('/problem/editproblem/{id}','ProblemController@editproblem');

Route::post('/problem/update','ProblemController@update');

// --RULE--

Route::get('/rule', 'AdminController@rule');


// DATA USER

Route::get('/pasien', 'AdminController@pasien')->name('pasien');

Route::get('/pasien/lihat/{id}','AdminController@lihat');


// RECYCLE BIN

Route::get('/evidencetrash', 'AdminController@evidencetrash');



// USER

Route::get('/', 'UserController@userhome')->name('userhome');

Route::post('/userhome/store','UserController@store');

Route::get('/konsultasi', 'UserController@konsultasi');

Route::get('/hasildiagnosa', 'UserController@hasildiagnosa');
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/proses', 'AdminController@proses');





