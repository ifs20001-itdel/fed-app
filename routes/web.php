<?php

use App\Http\Controllers\CRUDTableController;
use App\Http\Controllers\KesimpulanController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

//ROUTE LOGIN

Route::post('/login/auth', [LoginController::class, 'login']);

Route::get('/user/login', function () {
    return view('login');
})->name('login');

Route::get('/api/{useraccount}/{token}/{appid}', function () {
})->middleware('auth.token');

Route::get('/user/logout', [LoginController::class, 'logout']);

Route::get('/logut', function () {
    Auth::logout();
    dd('berhasil');
});


//-----------------------------------------------------------------------------------------------------


//Route Konten

Route::middleware(['auth'])->group(function () {
    Route::get('/evaluasi-kerja/{jenisPelaksanaan}', [CRUDTableController::class, 'tampilData']);

    Route::get('/biodata', function () {
        return view('pages.biodata');
    });

    Route::get('/profil', function () {
        return view('pages.profil');
    });

    Route::get('/', function () {
        return view('pages.biodata');
    })->name('home');


    Route::post('/evaluasi-kerja/{jenisTabel}/tambah-data', [CRUDTableController::class, 'tambahData']);

    Route::get('/evaluasi-kerja/edit/{id}', [CRUDTableController::class, 'editdata']);

    Route::post('/evaluasi-kerja/edit-data', [CRUDTableController::class, 'update']);

    Route::get('/evaluasi-kerja/delete/{id}', [CRUDTableController::class, 'destroy']);

    // fungsi edit dan delete penelitian

    Route::get('/evaluasi-kerja/edit2/{id}', [CRUDTableController::class, 'editdata2']);

    Route::post('/evaluasi-kerja/edit-data2', [CRUDTableController::class, 'update2']);

    Route::get('/evaluasi-kerja/delete2/{id}', [CRUDTableController::class, 'destroy2']);

    // fungsi edit dan delete pengabdian

    Route::get('/evaluasi-kerja/edit3/{id}', [CRUDTableController::class, 'editdata3']);

    Route::post('/evaluasi-kerja/edit-data3', [CRUDTableController::class, 'update3']);

    Route::get('/evaluasi-kerja/delete3/{id}', [CRUDTableController::class, 'destroy3']);

    // fungsi edit dan delete penunjang

    Route::get('/evaluasi-kerja/edit4/{id}', [CRUDTableController::class, 'editdata4']);

    Route::post('/evaluasi-kerja/edit-data4', [CRUDTableController::class, 'update4']);

    Route::get('/evaluasi-kerja/delete4/{id}', [CRUDTableController::class, 'destroy4']);

    // fungsi edit dan delete kesimpulan

    Route::get('/evaluasi-kerja/edit5/{id}', [CRUDTableController::class, 'editdata5']);

    Route::post('/evaluasi-kerja/edit-data5', [CRUDTableController::class, 'update5']);

    Route::get('/evaluasi-kerja/delete5/{id}', [CRUDTableController::class, 'destroy5']);
});


// KESIMPULAN
Route::get('/input', '\App\Http\Controllers\KesimpulanController@input');
Route::post('/proses', '\App\Http\Controllers\KesimpulanController@proses');
// Route::post('/cetak', '\App\Http\Controllers\KesimpulanController@cetak');




// CETAK
Route::get('/cetak', function(){
    return view('cetak');
});