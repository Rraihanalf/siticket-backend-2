<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\PinjamController;
use App\Http\Controllers\Api\TicketController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum', 'role:tc')->group(function(){
    
    Route::get('/tc/user/me', [UserController::class, 'profile']);
    Route::get('/tc/barang', [BarangController::class, 'index']);
    Route::get('/tc/barang/{id}', [BarangController::class, 'barangById']);
    Route::post('/tc/barang/store', [BarangController::class, 'simpan']);
    Route::put('/tc/barang/update/{id}', [BarangController::class, 'update']);
    Route::delete('/tc/barang/delete/{id}', [BarangController::class, 'destroy']);

    Route::patch('/tc/pinjam/approved/{id}', [PinjamController::class, 'approved']);
    Route::patch('/tc/pinjam/returned/{id}', [PinjamController::class, 'returned']);
    Route::get('/tc/pinjam', [PinjamController::class, 'index']);
    Route::get('/tc/pinjam/{id}', [PinjamController::class, 'pinjamById']);
    Route::put('/tc/pinjam/update/{id}', [PinjamController::class, 'update']);
    Route::delete('/tc/pinjam/delete/{id}', [PinjamController::class, 'destroy']);
});

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/{id}', [BarangController::class, 'barangById']);
Route::get('/pinjam', [PinjamController::class, 'index']);
Route::get('/pinjam/{id}', [PinjamController::class, 'pinjamById']);
Route::post('/pinjam/store', [PinjamController::class, 'store']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['auth:sanctum', 'role:admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::get('/admin/user/me', [UserController::class, 'profile']);
    Route::get('/admin/user/{id}', [UserController::class, 'userById']);
    Route::post('/admin/user/store', [UserController::class, 'store']);
    Route::put('/admin/user/update/{id}', [UserController::class, 'update']);
    Route::delete('/admin/user/delete/{id}', [UserController::class, 'destroy']);
    
    Route::get('/admin/tickets', [TicketController::class, 'index']);
    Route::get('/admin/tickets/all', [TicketController::class, 'countAll']);
    Route::get('/admin/ticket/{id}', [TicketController::class, 'ticketById']);
    Route::get('/admin/mytickets', [TicketController::class, 'ticketByUser']);
    Route::post('/admin/ticket/store', [TicketController::class, 'store']);
    Route::put('/admin/ticket/update/{id}', [TicketController::class, 'update']);
    Route::delete('/admin/ticket/delete/{id}', [TicketController::class, 'destroy']);
});

Route::middleware(['auth:sanctum', 'role:guest'])->group(function () {
    Route::get('/guest/tickets', [TicketController::class, 'index']);
    Route::get('/guest/tickets/all', [TicketController::class, 'countAll']);
    Route::get('/guest/user/me', [UserController::class, 'profile']);
    Route::get('/guest/mytickets', [TicketController::class, 'ticketByUser']);
    Route::get('/guest/ticket/{id}', [TicketController::class, 'ticketById']);
    Route::post('/guest/ticket/store', [TicketController::class, 'store']);
    Route::put('/guest/ticket/update/{id}', [TicketController::class, 'update']);
    Route::delete('/guest/ticket/delete/{id}', [TicketController::class, 'destroy']);
});

