<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HubController;
use App\Http\Controllers\RentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Auth/Login');
    //return Inertia::render('Welcome', [
    //    'canLogin' => Route::has('login'),
    //    'canRegister' => Route::has('register'),
    //    'laravelVersion' => Application::VERSION,
    //    'phpVersion' => PHP_VERSION,
   //]);
});

// Hilfeinsatz Registrierung
Route::get('/welcome', function () {
    return Inertia::render('Auth/Register');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::resource('/hub', HubController::class);
Route::resource('/company', CompanyController::class);
Route::resource('/rent', RentController::class);
