<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logowanieController;
use App\Http\Controllers\SesjaController;

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
/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('main');
})->name('main');
//Logowanie i rejestracja, i wylogowanie
Route::get('login', [logowanieController::class, 'viewLoginForm'])->name('logowanie');
Route::get('register', [logowanieController::class, 'viewRegisterForm'])->name('rejestracja');
Route::post('logout', [LogowanieController::class, 'logout'])->name('wyloguj');
Route::post('login', [LogowanieController::class, 'login'])->name('zaloguj');
Route::post('register', [LogowanieController::class, 'register'])->name('zarejestruj');
Route::get('dashboard', [SesjaController::class, 'viewDashboard'])->middleware('auth')->name('dashboard');