<?php

use App\Http\Controllers\PPController;
use App\Http\Controllers\ProfileController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profile', function () {
    return view('Konten.profile');
});

// Route::resource('pp', PPController::class);

Route::get('/register', function () {
    return view('register');
});

Route::get('/pp', function () {
    return view('Konten.pp');
});

Route::get('/penelitian', function () {
    return view('Konten.penelitian');
});

Route::get('/pengabdian', function () {
    return view('Konten.pengabdian');
});

Route::get('/kesimpulan', function () {
    return view('Konten.kesimpulan');
});

Route::get('/logout', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('Konten.profile');
});

// Route::get('/logout', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
