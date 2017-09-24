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

// Route::get('/', function () {
//     return view('pagelayout.content');
// });
// Route::get('admin', function () {
//     return view('admin');
// });


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index');
Route::get('/listcoach', 'ListcoachController@index');
Route::get('/profilecoach', 'ProfilecoachController@index');
Route::get('/checkout', 'CheckoutController@index');
Route::get('/coachtable', 'CoachtableController@index');
Route::get('/registerc', 'RegistercoachController@index');


Auth::routes();

// admin
Route::group(['middleware' => ['auth','admin'],'prefix'=> '/admin'], function() {
    
    Route::get('/', 'AdminController@index');

    // Route::group(['prefix' => '/bimbingan/skripsi'], function () {
    //     Route::get('/', 'AdminDepartemen\AdminDptController@indexBimbinganS');
    //     Route::post('/tambah', 'AdminDepartemen\AdminDptController@tambahBimbinganS');
    //     Route::post('/ubah', 'AdminDepartemen\AdminDptController@ubahBimbinganS');
    //     Route::post('/hapus', 'AdminDepartemen\AdminDptController@hapusBimbinganS');
    //     Route::post('/daftar', 'AdminDepartemen\AdminDptController@daftarUjianS');
    //     Route::post('/ganti', 'AdminDepartemen\AdminDptController@gantiDosenS');
    //     Route::get('/getMhsNim','AdminDepartemen\AdminDptController@getMhsNim');
    //     Route::get('/getMhsNama','AdminDepartemen\AdminDptController@getMhsNama');
    //     Route::post('/filter','AdminDepartemen\AdminDptController@filterBimbinganS');
    //     Route::post('/dps','AdminDepartemen\AdminDptController@tetapkanDPS');
    //     Route::get('/surat/{id}','AdminDepartemen\AdminDptController@skPembimbing');
    //     Route::get('/{url}', 'AdminDepartemen\AdminDptController@indexBimbinganS1');
    // });
});

// coach
Route::group(['middleware' => ['auth','coach'],'prefix'=> '/coach'], function() {
    
    Route::get('/', 'CoachController@index');
});

// user
Route::group(['middleware' => ['auth','user'],'prefix'=> '/user'], function() {
    
    Route::get('/', 'UserController@index');
});