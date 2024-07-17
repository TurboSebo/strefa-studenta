<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logowanieController;

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
});
Route::get('/logowanie', [logowanieController::class, 'viewLoginForm'])->name('login');
Route::get('/rejestracja', [logowanieController::class, 'viewRegisterForm'])->name('register');