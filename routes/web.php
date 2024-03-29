<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WikiController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\DashboardController;

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
Route::domain('{community}.localhost')->group(function(){
    Route::get('/wiki/', [WikiController::class, 'home'])->name('wiki.home');
    Route::get('/wiki/{wiki:slug}', [WikiController::class, 'index']);

});