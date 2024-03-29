<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;

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

Route::delete('/transactions/delete/{id}', [TransactionController::class, 'deleteData'])->name('transactions.delete');
Route::post('/transactions/update', [TransactionController::class, 'updateData'])->name('transactions.update');
Route::post('/transactions/add', [TransactionController::class, 'addData'])->name('transactions.add');
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/signout', [AuthController::class, 'signOut']);
Route::post('/login-auth', [AuthController::class, 'loginAuth'])->name('login.auth');
Route::get('/login', [LoginController::class, 'index']);
Route::get('/', [TransactionController::class, 'index']);
