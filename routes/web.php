<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rental', [RentalController::Class, 'index']);
Route::get('/dashboard', [RentalController::Class, 'dashboard']);

Route::get('/rental/create', [RentalController::Class, 'create']);
Route::post('/rental/store', [RentalController::Class, 'store']);

Route::get('/rental/show/{id}', [RentalController::Class, 'show']);
Route::get('/rental/selesai/{id}', [RentalController::Class, 'selesai']);


Route::get('/rental/edit/{id}', [RentalController::Class, 'edit']);
Route::patch('/rental/update/{id}', [RentalController::Class, 'update']);

Route::delete('/rental/delete/{id}', [RentalController::Class, 'destroy']);
Route::get('/rental/trash/all', [RentalController::Class, 'trashed']);
Route::get('/rental/restore/{id}', [RentalController::Class, 'restore']);
Route::get('/rental/permanentDeletes/{id}', [RentalController::Class, 'deleted']);










