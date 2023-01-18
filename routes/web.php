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

Route::get('/studentAdmission', [StudentAdmissionController::class, 'index']);
Route::get('/studentAdmission/register', [StudentAdmissionController::class, 'create']);
Route::post('/studentAdmission/store', [StudentAdmissionController::class,'store']);
Route::post('/studentAdmission/authenticate', [StudentAdmissionController::class,'authenticate']);
Route::get('/studentAdmission/login', [StudentAdmissionController::class,'login']);


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