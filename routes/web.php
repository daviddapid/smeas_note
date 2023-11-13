<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

// Route::get('/', function () {
//     return 'hai';
// });
Route::middleware('auth')->group(function () {
    Route::get('/', [NoteController::class, 'index'])->name('index');
    Route::post('/note', [NoteController::class, 'store'])->name('note.store');
    Route::put('/note/{note}', [NoteController::class, 'update'])->name('note.update');
    Route::delete('/note/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerAction'])->name('register.action');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
