<?php
// routes/web.php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerifyController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Redirect root URL to login
Route::get('/', function () {
    return redirect()->route('dashboard');
});
// Login Routes
Route::middleware('guest')->group(function () {
    Route::get('Auth/Login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('Auth/Login', [LoginController::class, 'login']);
    Route::get('Auth/Register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('Auth/Register', [RegisterController::class, 'register']);
    Route::get('Auth/Verify', [VerifyController::class, 'showVerifyForm'])->name('verify');
    Route::post('Auth/Verify', [VerifyController::class, 'verify']);
});

// Dashboard Route
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('Customer', [CustomerController::class, 'index'])->name('Customer');
    Route::get('Customer/All', [CustomerController::class, 'all'])->name('customer.all');
    Route::get('Customer/Create', [CustomerController::class, 'showcreate'])->name('customer.create');
    Route::post('Customer/Create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('Customer/Edit/{id}', [CustomerController::class, 'update'])->name('customer.edit');
    Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
    Route::put('customer/rotate/{id}', [CustomerController::class, 'rotate'])->name('customer.rotate');
    Route::get('Customer/View/{id}', [CustomerController::class, 'showview'])->name('customer.view');
    Route::get('Customer/Edit/{id}', [CustomerController::class, 'showedit'])->name('customer.edit');

});
//Service Route
Route::middleware('auth')->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'createServiceForm'])->name('services.create');
    Route::post('/services/create', [ServiceController::class, 'storeService'])->name('services.store'); // Değiştirildi
    Route::get('/services/edit/{id}', [ServiceController::class, 'editServiceForm'])->name('services.edit');
    Route::post('/services/edit/{id}', [ServiceController::class, 'updateService'])->name('services.update'); // Değiştirildi

    Route::get('/services/categories', [ServiceController::class, 'showServiceCategories'])->name('services.categories.index');
    Route::get('/services/categories/create', [ServiceController::class, 'createCategoryForm'])->name('services.categories.create');
    Route::post('/services/categories/create', [ServiceController::class, 'storeCategory'])->name('services.categories.store'); // Değiştirildi
    Route::get('/services/categories/edit/{id}', [ServiceController::class, 'editCategoryForm'])->name('services.categories.edit');
    Route::post('/services/categories/edit/{id}', [ServiceController::class, 'updateCategory'])->name('services.categories.update'); // Değiştirildi
});

//Product Route
Route::middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'createProductForm'])->name('products.create');
    Route::post('/products/create', [ProductController::class, 'storeProduct'])->name('products.store'); // Değiştirildi
    Route::get('/products/edit/{id}', [ProductController::class, 'editProductForm'])->name('products.edit');
    Route::post('/products/edit/{id}', [ProductController::class, 'updateProduct'])->name('products.update'); // Değiştirildi

    Route::get('/products/categories', [ProductController::class, 'showProductCategories'])->name('products.categories.index');
    Route::get('/products/categories/create', [ProductController::class, 'createCategoryForm'])->name('products.categories.create');
    Route::post('/products/categories/create', [ProductController::class, 'storeCategory'])->name('products.categories.store'); // Değiştirildi
    Route::get('/products/categories/edit/{id}', [ProductController::class, 'editCategoryForm'])->name('products.categories.edit');
    Route::post('/products/categories/edit/{id}', [ProductController::class, 'updateCategory'])->name('products.categories.update'); // Değiştirildi
});
// Expense routes
Route::middleware('auth')->group(function () {
        Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
        Route::get('/expenses/create', [ExpenseController::class, 'createExpenseForm'])->name('expenses.create');
        Route::post('/expenses/create', [ExpenseController::class, 'storeExpense'])->name('expenses.store');
        Route::get('/expenses/edit/{id}', [ExpenseController::class, 'editExpenseForm'])->name('expenses.edit');
        Route::post('/expenses/edit/{id}', [ExpenseController::class, 'updateExpense'])->name('expenses.update');
        Route::delete('/expenses/delete/{id}', [ExpenseController::class, 'deleteExpense'])->name('expenses.delete');

        // Expense Category routes
        Route::get('/expenses/categories', [ExpenseController::class, 'showExpenseCategories'])->name('expenses.categories.index');
        Route::get('/expenses/categories/create', [ExpenseController::class, 'createCategoryForm'])->name('expenses.categories.create');
        Route::post('/expenses/categories/create', [ExpenseController::class, 'storeCategory'])->name('expenses.categories.store');
        Route::get('/expenses/categories/edit/{id}', [ExpenseController::class, 'editCategoryForm'])->name('expenses.categories.edit');
        Route::post('/expenses/categories/edit/{id}', [ExpenseController::class, 'updateCategory'])->name('expenses.categories.update');
        Route::delete('/expenses/categories/delete/{id}', [ExpenseController::class, 'deleteCategory'])->name('expenses.categories.delete');
});

Route::get('/Logout', [LogoutController::class, 'showLogoutForm'])->name('logout.form');
Route::post('/Logout', [LogoutController::class, 'logout'])->name('logout');
