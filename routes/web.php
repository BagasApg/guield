<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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



Route::get('/onspot', function () {
    return view('scan');
});

Route::post('/process-scan', [TicketController::class, 'scan'])->name('ticket-scan');

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/admin', [DashboardController::class, 'redirectToIndex']);
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
