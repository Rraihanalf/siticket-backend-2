<?php

use App\Http\Controllers\Api\Auth\AuthController;
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
    Route::get('/admin/tickets/open', [TicketController::class, 'countOpen']);
    Route::get('/admin/tickets/close', [TicketController::class, 'countClose']);
    Route::get('/admin/ticket/{id}', [TicketController::class, 'ticketById']);
});

Route::middleware(['auth:sanctum', 'role:guest'])->group(function () {
    Route::get('/guest/tickets', [TicketController::class, 'index']);
    Route::get('/guest/user/me', [UserController::class, 'profile']);
    Route::get('/guest/ticket/{id}', [TicketController::class, 'ticketById']);
    Route::post('/guest/ticket/store', [TicketController::class, 'store']);
    Route::put('/guest/ticket/update/{id}', [TicketController::class, 'update']);
    Route::delete('/guest/ticket/delete/{id}', [TicketController::class, 'destroy']);
});

