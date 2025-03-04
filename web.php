<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinanceController;

// Rota para a tela de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Rota para logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rotas para o dashboard e funcionalidades financeiras (protegidas por autenticação)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/add-expense', function () { return view('add_expense'); })->name('add_expense_form');
    Route::post('/add-expense', [FinanceController::class, 'addExpense'])->name('add_expense');
    Route::get('/view-expenses', [FinanceController::class, 'viewExpenses'])->name('view_expenses');
    Route::delete('/delete-expense/{id}', [FinanceController::class, 'deleteExpense'])->name('delete_expense');

    Route::get('/add-income', function () { return view('add_income'); })->name('add_income_form');
    Route::post('/add-income', [FinanceController::class, 'addIncome'])->name('add_income');
    Route::get('/view-incomes', [FinanceController::class, 'viewIncomes'])->name('view_incomes');
    Route::delete('/delete-income/{id}', [FinanceController::class, 'deleteIncome'])->name('delete_income');
});
