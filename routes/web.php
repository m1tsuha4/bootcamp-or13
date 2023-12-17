<?php

use App\Http\Controllers\BootcampController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/bootcamp', function () {
//     return view('bootcamp');
// });

Route::get('/bootcamp', [BootcampController::class,'index'])->name('dashboard_bootcamp');
Route::get('/add-bootcamp', [BootcampController::class,'create']);
Route::post('/add-bootcamp', [BootcampController::class,'store']);
Route::get('/edit-bootcamp/{id}', [BootcampController::class,'edit']);
Route::post('/edit-bootcamp/{id}', [BootcampController::class,'update']);
Route::get('/delete-bootcamp/{id}', [BootcampController::class,'destroy']);
// Route::get('/berita', [\App\Http\Controllers\BeritaController::class,'index'])->name('dashboardadmin');
