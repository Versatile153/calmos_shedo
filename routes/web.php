<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticationController;
use App\Http\Controllers\KycController;
use App\Http\Controllers\AdminController;



// use App\Http\Controllers\ReferralRegisterController;



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

Route::middleware(['verify.kyc'])->group(function () {
    Route::get('/withdraw', [App\Http\Controllers\DashboardConttroller::class, 'withdraw']);
    // ... other routes that require KYC verification
});
Route::get('/investment', [App\Http\Controllers\DashboardConttroller::class, 'investment'])->name('investment');
Route::get('/transfer', [App\Http\Controllers\DashboardConttroller::class, 'transfer']);
Route::get('/transaction', [App\Http\Controllers\DashboardConttroller::class, 'transaction'])->name('dashboard.transaction');
Route::get('/refferal', [App\Http\Controllers\DashboardConttroller::class, 'refferal']);
Route::get('/ticket', [App\Http\Controllers\DashboardConttroller::class, 'ticket'])->name('deposits.tickets');
Route::get('/ticket_new', [App\Http\Controllers\DashboardConttroller::class, 'ticket_new']);

Route::get('/fa', [App\Http\Controllers\DashboardConttroller::class, 'fa']);
Route::get('/profile', [App\Http\Controllers\DashboardConttroller::class, 'profile']);
Route::get('/password', [App\Http\Controllers\DashboardConttroller::class, 'password']);
Route::get('/invest', [App\Http\Controllers\DashboardConttroller::class, 'invest']);
Route::get('/promotion', [App\Http\Controllers\DashboardConttroller::class, 'promotion']);
Route::get('/kyc', [App\Http\Controllers\DashboardConttroller::class, 'kyc']);
Route::get('/admin', [App\Http\Controllers\DashboardConttroller::class, 'admin']);






// routes/web.php


Route::get('/deposits/create', [DepositController::class, 'create'])->name('deposits.create');
Route::get('/history', [DepositController::class, 'history'])->name('deposits.history');

Route::post('/deposits', [DepositController::class, 'store'])->name('deposits.store');
Route::get('/deposits/confirmation', [DepositController::class, 'confirmation'])->name('deposits.confirmation');

// routes/web.php

Route::post('/confirm-deposit', [DepositController::class, 'storeTxn'])->name('confirmDeposit');
Route::get('/run-scheduler', [DepositController::class, 'runScheduler']);







Route::post('/investments', [InvestController::class, 'store'])->name('investments.store');



// routes/web.php


Route::get('/change-password', [PasswordController::class, 'edit'])->name('password.edit');
Route::put('/change-password', [PasswordController::class, 'update'])->name('password.update');

// routes/web.php


// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');





Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');




Route::get('/referal-register/{id}', [TicketController::class, 'loadregister']);



Route::post('/referral-register', [App\Http\Controllers\ReferralMainController::class, 'create1']);

Route::post('/register1', [CustomRegisterController::class, 'register']);



// Add this route
Route::post('/users', [UserController::class, 'store']);
Route::post('/users', [App\Http\Controllers\DashboardConttroller::class, 'users']);


// routes/web.php


// Withdraw routes
// Route::get('/withdraws', [WithdrawController::class, 'index'])->name('withdraws.index');
// Route::get('/withdraws/create', [WithdrawController::class, 'create'])->name('withdraws.create');
Route::post('/withdraws/store', [WithdrawController::class, 'store'])->name('withdraws.store');

// Add other routes as needed (e.g., edit, update, delete)

Route::prefix('user')->middleware(['auth', 'verified'])->group(function () {
    // ... other routes

    Route::post('/two-factor-authentication', [TwoFactorAuthenticationController::class, 'store'])
        ->name('two-factor.enable');

    Route::delete('/two-factor-authentication', [TwoFactorAuthenticationController::class, 'destroy'])
        ->name('two-factor.disable');
});


// routes/web.php


Route::middleware(['auth'])->group(function () {
    // Route::get('/kyc/form', [KycController::class, 'showForm'])->name('kyc.form');
    Route::post('/kyc/store', [KycController::class, 'store'])->name('kyc.store');
});



// Admin routes

    Route::get('/userdeposits', [AdminController::class, 'deposits'])->name('admin.index');
    Route::get('/invests', [AdminController::class, 'invests'])->name('admin.invests');
    Route::get('/userkyc', [AdminController::class, 'userkyc'])->name('admin.kyc');
    Route::get('/withdrawals', [AdminController::class, 'withdrawals'])->name('admin.withdrawals');




    Route::post('/update-deposit-status/{id}', [AdminController::class, 'updateDepositStatus'])->name('update.deposit.status');

    Route::post('/update-deposit-status1/{id}', [AdminController::class, 'updateDepositStatus1'])->name('update.deposit.status1');

    Route::post('/update-deposit-status2/{id}', [AdminController::class, 'updateDepositStatus2'])->name('update.deposit.status2');
    Route::post('/update-deposit-status3/{id}', [AdminController::class, 'updateDepositStatus3'])->name('update.deposit.status3');




