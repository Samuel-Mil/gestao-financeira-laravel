<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\BankController;
use App\Http\Controllers\Dashboard\CreateBankAccountController;
use App\Http\Controllers\Dashboard\FlowController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\InvoicesController;
use App\Http\Controllers\Dashboard\UserController;
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
    return redirect()->route("dashboard");
});

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "login"])->name("doLogin");

Route::group(['middleware' => ['auth']], function() {
    // User management routes
    Route::get("/dashboard/register", [RegisterController::class, "index"])->name("register");
    Route::post("/dashboard/register", [RegisterController::class, "register"])->name("register-user");
    Route::get("/dashboard/list-users", [UserController::class, "index"])->name("list-users");
    Route::get("/dashboard/update-user/{id}", [UserController::class, "edit"])->name("edit-user");
    Route::post("/dashboard/update-user/{id}", [UserController::class, "update"])->name("update-user");
    Route::get("/dashboard/delete-user/{id}", [UserController::class, "delete"])->name("delete-user");
    

    // Dashboard
    Route::get("/dashboard/home", [HomeController::class, "index"])->name("dashboard");
    Route::get("/logout", [LogoutController::class, "logout"])->name("logout");
    
    // Bank routes
    Route::get("/dashboard/show_bank_accounts", [HomeController::class, "show"])->name("show");
    Route::get("/dashboard/register_bank_account", [CreateBankAccountController::class, "index"])->name("ceate-bank-account");
    Route::post("/dashboard/register_bank_account", [CreateBankAccountController::class, "create"])->name("register-bank-account");
    Route::get("/dashboard/list_bank_accounts", [BankController::class, "list"])->name("list-banks");
    Route::get("/dashboard/delete_bank/{id}", [BankController::class, "delete"])->name("delete-bank");
    Route::get("/dashboard/update_bank_accounts/{id}", [BankController::class, "edit"])->name("edit-bank");
    Route::post("/dashboard/update_bank_accounts/{id}", [BankController::class, "update"])->name("update-bank");

    // Rotas de controle de fluxo de caixa
    Route::get("/dashboard/inOut", [FlowController::class, "list"])->name("inOut");
    Route::get("/dashboard/create_flow", [FlowController::class, "create"])->name("create-flow");
    Route::post("/dashboard/create_flow", [FlowController::class, "register"])->name("register-flow");

    // Rotas para o controle das faturas
    Route::get("/dashboard/emitir_fatura", [InvoicesController::class, "index"])->name('register-invoice');
    Route::post("/dashboard/create-invoice", [InvoicesController::class, 'create'])->name('create-invoice');
    Route::get("/dashboard/rastrear-faturas", [InvoicesController::class, 'track'])->name('track-invoices');
    Route::get("/dashboard/listar-faturas", [InvoicesController::class, 'manage'])->name('list-invoices');
    Route::get('/dashboard/delete-invoice/{id}', [InvoicesController::class, 'delete'])->name('delete-invoice');
    Route::get('/dashboard/edit-invoice/{id}', [])->name('edit-invoice');
});