<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', [App\Http\Controllers\PagesConttroller::class, 'about']);
Route::get('/services', [App\Http\Controllers\PagesConttroller::class, 'services']);
Route::get('/contact', [App\Http\Controllers\PagesConttroller::class, 'contact']);
Route::get('/insight', [App\Http\Controllers\PagesConttroller::class, 'insight']);
Route::get('/medic-canabis', [App\Http\Controllers\PagesConttroller::class, 'medic']);
Route::get('/crypto', [App\Http\Controllers\PagesConttroller::class, 'crypto']);
Route::get('/agriculture', [App\Http\Controllers\PagesConttroller::class, 'agric']);
Route::get('/gold', [App\Http\Controllers\PagesConttroller::class, 'gold']);
Route::get('/estate', [App\Http\Controllers\PagesConttroller::class, 'estate']);
Route::get('/advise', [App\Http\Controllers\PagesConttroller::class, 'advise']);
Route::get('/privacy', [App\Http\Controllers\PagesConttroller::class, 'privacy']);
Route::get('/terms', [App\Http\Controllers\PagesConttroller::class, 'terms']);


//dashboard routes
Route::get('/deposit', [App\Http\Controllers\DashboardConttroller::class, 'deposit']);
Route::get('/withdraw', [App\Http\Controllers\DashboardConttroller::class, 'withdraw']);
Route::get('/investment', [App\Http\Controllers\DashboardConttroller::class, 'investment']);
Route::get('/transfer', [App\Http\Controllers\DashboardConttroller::class, 'transfer']);
Route::get('/transaction', [App\Http\Controllers\DashboardConttroller::class, 'transaction']);
Route::get('/refferal', [App\Http\Controllers\DashboardConttroller::class, 'refferal']);
Route::get('/ticket', [App\Http\Controllers\DashboardConttroller::class, 'ticket']);
Route::get('/fa', [App\Http\Controllers\DashboardConttroller::class, 'fa']);
Route::get('/profile', [App\Http\Controllers\DashboardConttroller::class, 'profile']);
Route::get('/password', [App\Http\Controllers\DashboardConttroller::class, 'password']);
Route::get('/invest', [App\Http\Controllers\DashboardConttroller::class, '/invest']);
























