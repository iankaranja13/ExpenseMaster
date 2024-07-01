<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ExpenseController;
use app\Http\Controllers\BudgetController;
use app\Http\Controllers\SavingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/home', [HomeController::class,'index']);

Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
    Route::get('/budget', [BudgetController::class, 'index'])->name('budget.index');
    Route::get('/savings', [SavingsController::class, 'index'])->name('savings.index');

    Route::middleware(['auth', 'checkadmin'])->group(function () {
        Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.home');
         });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
