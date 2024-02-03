<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PerangkatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//  return view('welcome');
//});

Route::get('/starter', [KaryawanController::class, 'starter']);
Route::get('/about', [KaryawanController::class, 'about']);
Route::get('/contact', [KaryawanController::class, 'contact']);

Route::get('/', [KaryawanController::class, 'index']);
Route::get('/datakaryawan', [KaryawanController::class, 'datakaryawan']);
//Route::get('/formkaryawan', [KaryawanController::class, 'formkaryawan']);
Route::get('/formkaryawan', [PerangkatController::class, 'formkaryawan']);
Route::post('/addkaryawan', [KaryawanController::class, 'addkaryawan']);
Route::delete('/deletekaryawan/{id}', [KaryawanController::class, 'deletekaryawan'])->name('deletekaryawan');
Route::get('/editkaryawan/{id}', [KaryawanController::class, 'editkaryawan'])->name('editkaryawan');
Route::put('/updatekaryawan/{id}', [KaryawanController::class, 'updatekaryawan'])->name('updatekaryawan');
Route::get('/masterperangkat', [PerangkatController::class, 'index'])->name('masterperangkat');
Route::post('/addperangkat', [PerangkatController::class, 'addPerangkat']);
Route::get('/hapusperangkat/{id}', [PerangkatController::class, 'hapusPerangkat']);
