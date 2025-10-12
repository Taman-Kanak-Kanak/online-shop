<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Inertia\Inertia;
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

Route::group([], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/forgot', [AuthController::class, 'forgot'])->name('forgot');
});


Route::get('/admin', function(Event $event) {
    return Inertia::render('Home', [
        'event' => [
            'test' => "123"
        ]
    ]);
});