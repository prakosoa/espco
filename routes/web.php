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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'FrontController@index');
Route::get('/listcoach', 'ListcoachController@index');
Route::get('/profilecoach/{id}', 'ProfilecoachController@index');
Route::get('/registerc', 'Auth\RegisterCoachController@index');
Route::post('/registerc/regist', 'Auth\RegisterCoachController@regist');
Route::get('/adduser', 'AdduserController@index');
Route::get('/invoice', 'InvoiceController@index');
Route::get('/listcoach/search', 'ListcoachController@search');




// admin
Route::group(['middleware' => ['auth','admin'],'prefix'=> '/admin'], function() {
    
    Route::get('/', 'AdminController@index');
    Route::get('/coachtable', 'CoachtableController@index');
    Route::get('/usertable', 'UsertableController@index');
    Route::get('/editcoach/{id}', 'EditcoachController@index');
    Route::get('/edituser/{id}', 'EdituserController@index');
    Route::post('/coach/edit', 'EditcoachController@editCoach');
    Route::post('/user/edit', 'EdituserController@editUser');
    Route::post('/coach/delete', 'EditcoachController@destroy');
    Route::post('/user/delete', 'EdituserController@destroy');
    Route::get('/adduser', 'AdduserController@index');
    Route::post('/adduser/add', 'AdduserController@adduser');
    Route::get('/hireadmin', 'HireadminController@index');



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
    Route::get('/schedules', 'ScheduleController@index');
    Route::get('/hirecoach', 'HirecoachController@index');
    Route::get('/editprofilecoach', 'EditprofilecoachController@index');
    Route::post('/editprofilecoach/edit', 'EditprofilecoachController@editCoach');
    Route::post('/create_schedule', 'ScheduleController@createSchedule')->name('coach.createschedule');
});

// user
Route::group(['middleware' => ['auth','user'],'prefix'=> '/user'], function() {
    
    Route::get('/', 'EditprofileuserController@index');
    Route::get('/checkout/{id}', 'CheckoutController@show')->name('user.checkout');
    Route::get('/editprofileuser', 'EditprofileuserController@index');
    Route::get('/hireuser', 'HireuserController@index')->name('user.hiredcoach');
    Route::post('/editprofileuser/edit', 'EditprofileuserController@editUser');
    Route::post('/hirecoach', 'ProfilecoachController@hireCoach')->name('user.hirecoach');
    Route::post('/checkout', 'CheckoutController@create')->name('user.checkout-post');
});