<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentAdmissionController;
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
//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index']);

Route::post('/student', [StudentAdmissionController::class, 'store']);
Route::get('/student/register', [StudentAdmissionController::class, 'create'])->middleware('guest');
Route::post('/student/authenticate', [StudentAdmissionController::class,'authenticate']);
Route::get('/student/login', [StudentAdmissionController::class,'login'])->name('login')->middleware('guest');
Route::get('/logout', [StudentAdmissionController::class,'logout'])->middleware('guest');
Route::get('/student/{id}/edit', [StudentAdmissionController::class, 'edit'])->middleware('auth');
Route::put('/student/{id}', [StudentAdmissionController::class, 'update'])->middleware('auth');
Route::delete('/student/{id}', [StudentAdmissionController::class, 'destroy'])->middleware('auth');


Route::get('/staff', [StaffController::class, 'index']);
Route::get('/staff/create', [StaffController::class, 'create']);
Route::post('/staff', [StaffController::class, 'store']);
Route::get('/staff/{id}/edit', [StaffController::class, 'edit']);
Route::put('/staff/{id}', [StaffController::class, 'update']);
Route::delete('/staff/{id}', [StaffController::class, 'destroy']);

Route::get('/fees', [FeeController::class, 'index']);
Route::get('/fees/create', [FeeController::class, 'create']);
Route::post('/fees', [FeeController::class, 'store']);
Route::get('/fees/{id}/edit', [FeeController::class,'edit']);
Route::put('/fees/{id}', [FeeController::class,'update']);
Route::delete('/fees/{id}', [FeeController::class,'destroy']);

Route::get('/feeCollection', [FeeCollectionController::class,'index']);
Route::post('/feeCollection', [FeeCollectionController::class,'store']);

Route::get('/reports', [ReportController::class,'index']);